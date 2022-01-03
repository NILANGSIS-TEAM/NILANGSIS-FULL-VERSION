package com.babyj.nilangsis.adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.babyj.nilangsis.R;
import com.babyj.nilangsis.activity.SiswaActivity;
import com.babyj.nilangsis.activity.TmbhDataActivity;
import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.Siswa;
import com.babyj.nilangsis.model.SiswaResponse;
import com.babyj.nilangsis.model.TambahData;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterSiswa extends RecyclerView.Adapter<AdapterSiswa.HolderSiswa> {
    private Context ctx;
    private List<Siswa> listSiswa;
    private List<Siswa> listGetSiswa;
    private String nis;

//    public void setFilter(List<Siswa> siswaSearch){
//        listSiswa = new ArrayList<>();
//        listSiswa.add((Siswa) siswaSearch);
//        notifyDataSetChanged();
//    }

    public AdapterSiswa(Context ctx, List<Siswa> listSiswa) {
        this.ctx = ctx;
        this.listSiswa = listSiswa;
    }

    @NonNull
    @Override
    public HolderSiswa onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View layout = LayoutInflater.from(parent.getContext()).inflate(R.layout.card_item_siswa, parent, false);
        HolderSiswa holder = new HolderSiswa(layout);
        return holder;

    }

    @Override
    public void onBindViewHolder(@NonNull HolderSiswa holder, int position) {

        Siswa sw = listSiswa.get(position);

        holder.tvNama.setText(sw.getNamaSW());
        holder.tvNis.setText(sw.getNIS());
        holder.tvAlamat.setText(sw.getAlamat());

    }

    @Override
    public int getItemCount() {
        return listSiswa.size();
    }

    public void setFilter(List<Siswa> siswaSearch){
        listSiswa = new ArrayList<>();
        listSiswa.addAll(siswaSearch);
        notifyDataSetChanged();
    }

    public class HolderSiswa extends RecyclerView.ViewHolder {
        TextView tvNama, tvNis, tvAlamat;

        public HolderSiswa(@NonNull View itemView) {
            super(itemView);

            tvNama = itemView.findViewById(R.id.tv_nama_siswa);
            tvNis = itemView.findViewById(R.id.tv_nis);
            tvAlamat = itemView.findViewById(R.id.tv_alamat_siswa);

            itemView.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {

                    nis = tvNis.getText().toString();
                    getSiswa();
                }
            });

        }
    }

    private void getSiswa(){
        APIRequestData ardSiswa = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<SiswaResponse> getSiswa = ardSiswa.ardGetSiswa(nis);

        getSiswa.enqueue(new Callback<SiswaResponse>() {
            @Override
            public void onResponse(Call<SiswaResponse> call, Response<SiswaResponse> response) {
                int code = response.body().getCode();
                String status = response.body().getStatus();
                listGetSiswa = response.body().getData();

                String varNis = listGetSiswa.get(0).getNIS();

                Intent kirimNis = new Intent(ctx, TmbhDataActivity.class);
                kirimNis.putExtra("xnis", varNis);
                TambahData.setXnis(varNis);
                ctx.startActivity(kirimNis);
            }

            @Override
            public void onFailure(Call<SiswaResponse> call, Throwable t) {
                Toast.makeText(ctx, "Gagal menghubungi server : "+t, Toast.LENGTH_SHORT).show();
            }
        });
    }



}

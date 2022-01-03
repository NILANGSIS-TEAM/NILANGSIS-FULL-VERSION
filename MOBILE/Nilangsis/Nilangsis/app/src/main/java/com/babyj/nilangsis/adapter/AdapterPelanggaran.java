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
import com.babyj.nilangsis.model.Pelanggaran;
import com.babyj.nilangsis.model.PelanggaranResponse;
import com.babyj.nilangsis.model.SiswaResponse;
import com.babyj.nilangsis.model.TambahData;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterPelanggaran extends RecyclerView.Adapter<AdapterPelanggaran.HolderPelanggaran> {

    private Context ctx;
    private List<Pelanggaran> listPelanggaran;
    private List<Pelanggaran> listGetPelanggaran;
    private String KodeTP;

    public AdapterPelanggaran(Context ctx, List<Pelanggaran> listPelanggaran) {
        this.ctx = ctx;
        this.listPelanggaran = listPelanggaran;
    }

    @NonNull
    @Override
    public HolderPelanggaran onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View layout = LayoutInflater.from(parent.getContext()).inflate(R.layout.card_item_pelanggaran, parent, false);
        HolderPelanggaran holder = new HolderPelanggaran(layout);
        return holder;
    }

    @Override
    public void onBindViewHolder(@NonNull HolderPelanggaran holder, int position) {
        Pelanggaran p = listPelanggaran.get(position);

        holder.tvPelanggaran.setText(p.getTipePelanggaran());
        holder.tvKodeTP.setText(p.getKodeTP());
    }

    @Override
    public int getItemCount() {
        return listPelanggaran.size();
    }

    public void setFilterP(List<Pelanggaran> searchp){
        listPelanggaran = new ArrayList<>();
        listPelanggaran.addAll(searchp);
        notifyDataSetChanged();
    }

    public class HolderPelanggaran extends RecyclerView.ViewHolder {
        TextView tvPelanggaran, tvKodeTP;

        public HolderPelanggaran(@NonNull View itemView) {
            super(itemView);

            tvPelanggaran = itemView.findViewById(R.id.tv_nama_pelanggaran);
            tvKodeTP = itemView.findViewById(R.id.tv_kodeTP);

            itemView.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {

                    KodeTP = tvKodeTP.getText().toString();
                    getPelanggaran();

                }
            });
        }
    }

    private void getPelanggaran(){
        APIRequestData ardPelanggaran = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<PelanggaranResponse> getPelanggaran = ardPelanggaran.ardGetPelanggaran(KodeTP);

        getPelanggaran.enqueue(new Callback<PelanggaranResponse>() {
            @Override
            public void onResponse(Call<PelanggaranResponse> call, Response<PelanggaranResponse> response) {
                int code = response.body().getCode();
                String status = response.body().getStatus();
                listGetPelanggaran =  response.body().getData();

                String varKodeTP = listGetPelanggaran.get(0).getKodeTP();

                Intent kirimKodeTP = new Intent(ctx, TmbhDataActivity.class);
                kirimKodeTP.putExtra("xKodeTP", varKodeTP);
                TambahData.setXtp(varKodeTP);
                ctx.startActivity(kirimKodeTP);

//                Toast.makeText(ctx, "Code : "+code+" | Status : "+status+ " | data : "+varKodeTP, Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onFailure(Call<PelanggaranResponse> call, Throwable t) {

            }
        });
    }

}

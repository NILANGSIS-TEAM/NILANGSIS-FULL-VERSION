package com.babyj.nilangsis.activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.SearchView;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.SearchManager;
import android.content.Context;
import android.os.Bundle;
import android.widget.Toast;

import com.babyj.nilangsis.R;
import com.babyj.nilangsis.adapter.AdapterPelanggaran;
import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.Pelanggaran;
import com.babyj.nilangsis.model.PelanggaranResponse;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class PelanggaranActivity extends AppCompatActivity {

    private RecyclerView rvPelanggaran;
    AdapterPelanggaran adPelanggaran;
    private RecyclerView.LayoutManager lmPelanggaran;
    private List<Pelanggaran> listPelanggaran = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pelanggaran);

        rvPelanggaran = findViewById(R.id.rv_pelanggaran);
        lmPelanggaran = new LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false);
        rvPelanggaran.setLayoutManager(lmPelanggaran);
        retrievePelanggaran();

        SearchView searchPelanggaran = (SearchView) findViewById(R.id.search_viewP);
        SearchManager searchManager = (SearchManager) getSystemService(Context.SEARCH_SERVICE);
        if (searchManager != null){
            searchPelanggaran.setSearchableInfo(searchManager.getSearchableInfo(getComponentName()));
            searchPelanggaran.onActionViewExpanded();
            searchPelanggaran.setQueryHint(getResources().getString(R.string.SVP));
            searchPelanggaran.setOnQueryTextListener(new SearchView.OnQueryTextListener() {
                @Override
                public boolean onQueryTextSubmit(String query) {
                    return true;
                }

                @Override
                public boolean onQueryTextChange(String newText) {

                    newText = newText.toLowerCase();
                    List<Pelanggaran> lp = new ArrayList<>();
                    for (Pelanggaran p : listPelanggaran){
                        String nama = p.getTipePelanggaran().toLowerCase();
                        if (nama.contains(newText)){
                            lp.add(p);
                        }
                    }
                    adPelanggaran.setFilterP(lp);

                    return true;
                }
            });
        }

    }

    public void retrievePelanggaran(){

        APIRequestData ardPelanggaran = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<PelanggaranResponse> tampilPelanggaran = ardPelanggaran.ardTampilPelanggaran();

        tampilPelanggaran.enqueue(new Callback<PelanggaranResponse>() {
            @Override
            public void onResponse(Call<PelanggaranResponse> call, Response<PelanggaranResponse> response) {
                int code = response.body().getCode();
                String status = response.body().getStatus();

                Toast.makeText(PelanggaranActivity.this, "Code : "+code+" | Status "+status, Toast.LENGTH_SHORT).show();

                listPelanggaran = response.body().getData();

                adPelanggaran = new AdapterPelanggaran(PelanggaranActivity.this, listPelanggaran);
                rvPelanggaran.setAdapter(adPelanggaran);
                adPelanggaran.notifyDataSetChanged();
            }

            @Override
            public void onFailure(Call<PelanggaranResponse> call, Throwable t) {
                Toast.makeText(PelanggaranActivity.this, "Gagal menghubungi server"+t, Toast.LENGTH_SHORT).show();
            }
        });
    }
}
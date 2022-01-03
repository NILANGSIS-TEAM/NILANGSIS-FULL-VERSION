package com.babyj.nilangsis.activity;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.SearchView;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.SearchManager;
import android.content.Context;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.widget.Toast;

import com.babyj.nilangsis.R;
import com.babyj.nilangsis.adapter.AdapterSiswa;
import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.Siswa;
import com.babyj.nilangsis.model.SiswaResponse;

import java.util.ArrayList;
import java.util.List;
import java.util.Locale;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class SiswaActivity extends AppCompatActivity {

    private RecyclerView rvSiswa;
    AdapterSiswa adSiswa;
    private RecyclerView.LayoutManager lmSiswa;
    private List<Siswa> listSiswa = new ArrayList<>();



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_siswa);

        rvSiswa = findViewById(R.id.rv_siswa);
        lmSiswa = new LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false);
        rvSiswa.setLayoutManager(lmSiswa);
        retrieveSiswa();

        SearchView searchSiswa = (SearchView) findViewById(R.id.search_view);
        SearchManager searchManager = (SearchManager) getSystemService(Context.SEARCH_SERVICE);
        if (searchManager != null){
            searchSiswa.setSearchableInfo(searchManager.getSearchableInfo(getComponentName()));
            searchSiswa.onActionViewExpanded();
            searchSiswa.setQueryHint(getResources().getString(R.string.SVS));
            searchSiswa.setOnQueryTextListener(new SearchView.OnQueryTextListener() {
                @Override
                public boolean onQueryTextSubmit(String query) {

                    return true ;
                }

                @Override
                public boolean onQueryTextChange(String newText) {

                    newText = newText.toLowerCase();
                    List<Siswa> ls = new ArrayList<>();
                    for (Siswa s : listSiswa){
                        String nama = s.getNamaSW().toLowerCase();
                        if (nama.contains(newText)){
                            ls.add(s);
                        }
                    }
                    adSiswa.setFilter(ls);
                    return true;

                }
            });
        }
    }

    public void retrieveSiswa(){

        APIRequestData ardSiswa = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<SiswaResponse> tampilSiswa = ardSiswa.ardTampilSiswa();

        tampilSiswa.enqueue(new Callback<SiswaResponse>() {
            @Override
            public void onResponse(Call<SiswaResponse> call, Response<SiswaResponse> response) {
                int code = response.body().getCode();
                String status = response.body().getStatus();

                Toast.makeText(SiswaActivity.this, "Code : "+code+" | Status : "+status, Toast.LENGTH_SHORT).show();

                listSiswa = response.body().getData();

                adSiswa = new AdapterSiswa(SiswaActivity.this, listSiswa);
                rvSiswa.setAdapter(adSiswa);
                adSiswa.notifyDataSetChanged();
            }

            @Override
            public void onFailure(Call<SiswaResponse> call, Throwable t) {
                Toast.makeText(SiswaActivity.this, "Gagal menghubungi server : "+t, Toast.LENGTH_SHORT).show();
            }
        });
    }
}
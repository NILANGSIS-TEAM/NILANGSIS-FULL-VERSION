package com.babyj.nilangsis.activity;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;
import androidx.fragment.app.Fragment;

import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import com.babyj.nilangsis.R;
import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.DataHis;
import com.babyj.nilangsis.model.His;
import com.babyj.nilangsis.model.HisResponse;
import com.babyj.nilangsis.model.Login;
import com.babyj.nilangsis.model.TambahData;
import com.google.android.material.bottomnavigation.BottomNavigationView;
import com.google.android.material.navigation.NavigationBarView;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class MainActivity extends AppCompatActivity {

    private String username;
    private final String TAG = getClass().getSimpleName();
    private CardView tmbhData, UbahPass;
    private List<His> listhis;
    TextView namaUser;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //data his otomatis
        gethis();

        //nama username
        namaUser = findViewById(R.id.berhasilLogin);
        username = Login.getLogin();
        namaUser.setText(username);

        tmbhData = findViewById(R.id.tambahData);
        tmbhData.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent tmbhData = new Intent(MainActivity.this, TmbhDataActivity.class);
                startActivity(tmbhData);
            }
        });

        UbahPass = findViewById(R.id.UbahPassword);
        UbahPass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent ubahPass = new Intent(MainActivity.this, UbahPswActivity.class);
                startActivity(ubahPass);
            }
        });

    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.menu_navigation, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(@NonNull MenuItem item) {
//        Handle item selection
        switch (item.getItemId()){
            case R.id.Logout:
                Intent intentLogout = new Intent(MainActivity.this, LoginActivity.class);
                startActivity(intentLogout);
                finish();
                break;
        }
        return super.onOptionsItemSelected(item);
    }

    private void gethis(){
        APIRequestData ardhis = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<HisResponse> gethis = ardhis.ardGetHis();


        gethis.enqueue(new Callback<HisResponse>() {
            @Override
            public void onResponse(Call<HisResponse> call, Response<HisResponse> response) {
                int code = response.body().getCode();
                String status = response.body().getStatus();
                listhis = response.body().getData();

                String his = listhis.get(0).getKodeHIS();
                DataHis.setKodeHIS(his);
            }

            @Override
            public void onFailure(Call<HisResponse> call, Throwable t) {

            }
        });
    }

}
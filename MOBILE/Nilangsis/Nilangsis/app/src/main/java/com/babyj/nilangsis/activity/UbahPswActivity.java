package com.babyj.nilangsis.activity;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.babyj.nilangsis.R;
import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.Login;
import com.babyj.nilangsis.model.UserResponse;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class UbahPswActivity extends AppCompatActivity {

    private String username, password;
    private EditText etusername, etubahpsw;
    private Button btn_ubhPsw;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ubah_psw);

        etusername = findViewById(R.id.et_username);
        etubahpsw = findViewById(R.id.et_ubahPsw);
        btn_ubhPsw = findViewById(R.id.btn_ubhPsw);

        username = Login.getLogin();
        etusername.setText(username);
        etusername.setFocusable(false);
    }

    public void actionUbahpsw(View view) {
        username = etusername.getText().toString();
        password = etubahpsw.getText().toString();

        if (username.trim().equals("")){
            etusername.setError("Isi Username terlebih dahulu");
        }
        else if(password.trim().equals("")){
            etubahpsw.setError("Isi password baru anda");
        }
        else{
            ubahpsw();
        }
    }

    private void ubahpsw(){
//        String globalURL = "https://nilangsis.000webhostapp.com/";
//        Retrofit.Builder builder = new Retrofit.Builder()
//                .baseUrl(globalURL)
//                .addConverterFactory(GsonConverterFactory.create());
//
//        Retrofit retrofit = builder.build();
        APIRequestData client = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<UserResponse> ubahpsw = client.ardUbahPassword(username, password);

        ubahpsw.enqueue(new Callback<UserResponse>() {
            @Override
            public void onResponse(Call<UserResponse> call, Response<UserResponse> response) {
                int code = response.body().getCode();
                String status = response.body().getStatus();

                Toast.makeText(UbahPswActivity.this, "Code : "+code+" | status : "+status, Toast.LENGTH_SHORT).show();
                finish();
            }

            @Override
            public void onFailure(Call<UserResponse> call, Throwable t) {
                Toast.makeText(UbahPswActivity.this, "Gagal menghubungi server |"+t.getMessage(), Toast.LENGTH_SHORT).show();
            }
        });
    }
}
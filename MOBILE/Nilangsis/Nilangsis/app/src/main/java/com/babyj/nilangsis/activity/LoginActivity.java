package com.babyj.nilangsis.activity;

import androidx.appcompat.app.AppCompatActivity;

import android.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;


import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.Login;
import com.babyj.nilangsis.model.User;
import com.babyj.nilangsis.model.UserResponse;
import com.babyj.nilangsis.R;

import java.security.ProtectionDomain;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;


public class LoginActivity extends AppCompatActivity {

    EditText edtusername, edtpassword;
    private final String TAG = getClass().getSimpleName();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        edtusername = findViewById(R.id.edt_username);
        edtpassword = findViewById(R.id.edt_password);

    }

    public void actionLogin(View view) {
        boolean isInputValid = false;

        if(edtusername.getText().toString().isEmpty()){
            edtusername.setError("Tidak boleh kosong");
            edtusername.requestFocus();
            isInputValid = false;
        }
        else {
            isInputValid = true;
        }

        if(isInputValid){
            User user = new User();
            user.setUsername(edtusername.getText().toString());
            user.setPassword(edtpassword.getText().toString());

            Login(user.getUsername(), user.getPassword());

        }
    }

    public void Login(String username, String password) {
        ProgressDialog proDialog = new ProgressDialog(this);
        proDialog.setTitle(getString(R.string.app_name));
        proDialog.setMessage("silahkan tunggu");
        proDialog.show();

//        String globalURL = "https://nilangsis.000webhostapp.com/";
//        Retrofit.Builder builder = new Retrofit.Builder()
//                .baseUrl(globalURL)
//                .addConverterFactory(GsonConverterFactory.create());
//
//        Retrofit retrofit = builder.build();
        APIRequestData client = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<UserResponse> call = client.login(username, password);

        call.enqueue(new Callback<UserResponse>() {
            @Override
            public void onResponse(Call<UserResponse> call, Response<UserResponse> response) {
                proDialog.dismiss();
                if((response.body()!=null)){
                    if(response.body().getCode() == 200){
                        User logUser = response.body().getUser_list().get(0);
                        Intent intent = new Intent(LoginActivity.this, MainActivity.class);
//                        intent.putExtra("username", logUser.getUsername());
                        String username = logUser.getUsername();
                        String nip = logUser.getNIP();
                        Login.setNip(nip);
                        Login.setLogin(username);
                        startActivity(intent);
                        finish();
                    }else if(response.body().getCode() == 401){
                        new AlertDialog.Builder(LoginActivity.this)
                                .setTitle("Peringatan")
                                .setMessage(response.body().getStatus())
                                .setPositiveButton("ok", new DialogInterface.OnClickListener() {
                                    @Override
                                    public void onClick(DialogInterface dialog, int which) {
                                    }
                                }).show();
                    }else {
                        //untuk code 400
                        new AlertDialog.Builder(LoginActivity.this)
                                .setTitle("Peringatan")
                                .setMessage(response.body().getStatus())
                                .setPositiveButton("ok", new DialogInterface.OnClickListener() {
                                    @Override
                                    public void onClick(DialogInterface dialog, int i) {
                                        dialog.dismiss();
                                    }
                                }).show();
                    }
                }else {
                    Toast.makeText(LoginActivity.this, "Status : Error!", Toast.LENGTH_SHORT).show();
                }
            }

            @Override
            public void onFailure(Call<UserResponse> call, Throwable t) {
                proDialog.dismiss();
                Log.d(TAG, t.getMessage());
                Toast.makeText(LoginActivity.this, "Error : " + t.toString(), Toast.LENGTH_SHORT).show();

            }
        });

    }

}
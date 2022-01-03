package com.babyj.nilangsis.api;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class RetroServer {

    private static final String baseURL = "https://www.ws-tif.com/nilang-sis//";
    private static Retrofit retro;

    public static Retrofit konekRetrofit(){
        if (retro == null){
            retro = new Retrofit.Builder()
                    .baseUrl(baseURL)
                    .addConverterFactory(GsonConverterFactory.create())
                    .build();
        }
        return retro;
    }

    public static APIRequestData getAPIRequestData(){
        return konekRetrofit().create(APIRequestData.class);
    }
}

package com.babyj.nilangsis.api;

import com.babyj.nilangsis.model.HisResponse;
import com.babyj.nilangsis.model.PelanggaranResponse;
import com.babyj.nilangsis.model.ResponseTambahP;
import com.babyj.nilangsis.model.SiswaResponse;
import com.babyj.nilangsis.model.UserResponse;

import okhttp3.MultipartBody;
import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.Multipart;
import retrofit2.http.POST;
import retrofit2.http.Part;
import retrofit2.http.Query;

public interface APIRequestData {

    @GET("https://www.ws-tif.com/nilang-sis/configs/rest-api/login-mobile")
    Call<UserResponse> login(
            @Query("Username") String Username,
            @Query("Password") String Password
    );

    @FormUrlEncoded
    @POST("https://www.ws-tif.com/nilang-sis/configs/rest-api/update-psw.php")
    Call<UserResponse> ardUbahPassword(
            @Field("Username") String Username,
            @Field("Password") String Password
    );

    @GET("https://www.ws-tif.com/nilang-sis/configs/rest-api/get-his.php")
    Call<HisResponse> ardGetHis();

    @FormUrlEncoded
    @POST("https://www.ws-tif.com/nilang-sis/configs/rest-api/get-siswa.php")
    Call<SiswaResponse> ardGetSiswa(
            @Field("NIS") String NIS
    );

    @GET("https://www.ws-tif.com/nilang-sis/configs/rest-api/tampil-siswa.php")
    Call<SiswaResponse> ardTampilSiswa();

    @FormUrlEncoded
    @POST("https://www.ws-tif.com/nilang-sis/configs/rest-api/get-tipePelanggaran.php")
    Call<PelanggaranResponse> ardGetPelanggaran(
            @Field("KodeTP") String KodeTP
    );

    @GET("https://www.ws-tif.com/nilang-sis/configs/rest-api/tampil-tipePelanggaran.php")
    Call<PelanggaranResponse> ardTampilPelanggaran();

    @FormUrlEncoded
    @POST("https://www.ws-tif.com/nilang-sis/configs/rest-api/insert.php")
    Call<ResponseTambahP> Upload(
            @Field("KodeHIS") String KodeHIS,
            @Field("NIP") String NIP,
            @Field("NIS") String NIS,
            @Field("KodeTP") String KodeTP,
            @Field("TanggalKejadian") String TanggalKejadian,
            @Field("Pukul") String Pukul
    );

    @Multipart
    @POST("https://www.ws-tif.com/nilang-sis/configs/rest-api/upload-image.php")
    Call<ResponseTambahP> uploadimage (@Part MultipartBody.Part image);

//    @FormUrlEncoded
//    @POST("create.php")
//    Call<ResponseModel> ardCreateData(
//            @Field("nama") String nama,
//            @Field("alamat") String alamat,
//            @Field("telepon") String telepon
//    );







}

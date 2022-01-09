package com.babyj.nilangsis.activity;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Intent;
import android.database.Cursor;
import android.graphics.BitmapFactory;
import android.net.Uri;
import android.os.Bundle;
import android.provider.MediaStore;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import com.babyj.nilangsis.R;
import com.babyj.nilangsis.api.APIRequestData;
import com.babyj.nilangsis.api.RetroServer;
import com.babyj.nilangsis.model.DataHis;
import com.babyj.nilangsis.model.HisResponse;
import com.babyj.nilangsis.model.Login;
import com.babyj.nilangsis.model.ResponseTambahP;
import com.babyj.nilangsis.model.TambahData;

import java.io.File;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import java.util.Locale;

import okhttp3.MediaType;
import okhttp3.MultipartBody;
import okhttp3.RequestBody;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class TmbhDataActivity extends AppCompatActivity {

    private String KodeHIS, NIP, NIS, KodeTP, BuktiPelanggaran, TanggalKejadian, Pukul, part_image;
    private EditText ethis, etnip, etnis, ettp, ettgl, etjam, etbp;
    private ImageView ivbp;
    ProgressDialog pd;
    final int REQUEST_GALLERY = 9544;
    private List<HisResponse> listhis;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tmbh_data);

        ethis = findViewById(R.id.et_KodeHis);
        etnis = findViewById(R.id.et_nis);
        etnip = findViewById(R.id.et_nip);
        ettp = findViewById(R.id.et_tp);
        ettgl = findViewById(R.id.et_tgl);
        etjam = findViewById(R.id.et_jam);
        etbp = findViewById(R.id.et_bp);
        ivbp = findViewById(R.id.iv_bp);

        // nip terisi otomatis
        NIP = Login.getNip();
        etnip.setText(NIP);
        etnip.setFocusable(false);

        //menerima nis
        Intent terimaNis = getIntent();
        NIS = TambahData.getXnis();

        //menerima KodeTP
        Intent terimaKodeTP = getIntent();
        KodeTP = TambahData.getXtp();

        //tampil
        etnis.setText(NIS);
        ettp.setText(KodeTP);
        ethis.setText(DataHis.getKodeHIS());
        ethis.setFocusable(false);

        //tgl otomatis
        String tgl = new SimpleDateFormat("dd-MM-yyyy", Locale.getDefault()).format(new Date());
        ettgl.setText(tgl);
        ettgl.setFocusable(false);

        //jam otomatis
        String jam = new SimpleDateFormat("HH.mm", Locale.getDefault()).format(new Date());
        etjam.setText(jam);
        etjam.setFocusable(false);

        pd = new ProgressDialog(this);
        pd.setMessage("Loading ... ");

    }


    public void actionNIS(View view) {
        Intent tampilsiswa = new Intent(TmbhDataActivity.this, SiswaActivity.class);
        startActivity(tampilsiswa);
    }

    public void actionTP(View view) {
        Intent tampilTPelanggaran = new Intent(TmbhDataActivity.this, PelanggaranActivity.class);
        startActivity(tampilTPelanggaran);
    }

    public void actionBP(View view) {
        Intent intent = new Intent();
        intent.setType("image/*");
        intent.setAction(Intent.ACTION_GET_CONTENT);
        startActivityForResult(Intent.createChooser(intent, "open gallery"), REQUEST_GALLERY);

    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if (resultCode == RESULT_OK){
            if (requestCode == REQUEST_GALLERY){
                Uri dataimage = data.getData();
                String[] imageproject = {MediaStore.Images.Media.DATA};
                Cursor cursor = getContentResolver().query(dataimage, imageproject, null, null, null);

                if (cursor != null){
                    cursor.moveToFirst();
                    int indexImage = cursor.getColumnIndex(imageproject[0]);
                    part_image = cursor.getString(indexImage);

                    if (part_image != null){
                        File image = new File(part_image);
                        ivbp.setImageBitmap(BitmapFactory.decodeFile(image.getAbsolutePath()));
                    }
                }
            }
        }
    }

    public void actionTambah(View view) {

        KodeHIS = ethis.getText().toString();
        NIP = etnip.getText().toString();
        NIS = etnis.getText().toString();
        KodeTP = ettp.getText().toString();
        TanggalKejadian = ettgl.getText().toString();
        Pukul = etjam.getText().toString();

        if (NIS.trim().equals("")){
            etnis.setError("NIS harus diisi");
        }
        else if (KodeTP.trim().equals("")){
            ettp.setError("KodeTP harus diisi");
        }
        else{
            uploadData();
            upimage();
            Intent go = new Intent(TmbhDataActivity.this, MainActivity.class);
            startActivity(go);
        }
    }

    private void uploadData(){

        APIRequestData up = RetroServer.getAPIRequestData();
        Call<ResponseTambahP> upl = up.Upload(KodeHIS, NIP, NIS, KodeTP, TanggalKejadian, Pukul);
        upl.enqueue(new Callback<ResponseTambahP>() {
            @Override
            public void onResponse(Call<ResponseTambahP> call, Response<ResponseTambahP> response) {
                int kode = response.body().getKode();
                String pesan = response.body().getPesan();

                Toast.makeText(TmbhDataActivity.this, "Kode : " +kode+ " | Pesan : "+pesan, Toast.LENGTH_SHORT).show();
                finish();
            }

            @Override
            public void onFailure(Call<ResponseTambahP> call, Throwable t) {

            }
        });

    }

    private void upimage(){
        pd.show();
        File imagefile = new File(part_image);
        RequestBody reqBody = RequestBody.create(MediaType.parse("multipart/form-file"), imagefile);
        MultipartBody.Part partImage = MultipartBody.Part.createFormData("BuktiPelanggaran", imagefile.getName(), reqBody);
        APIRequestData upimg = RetroServer.getAPIRequestData();
        Call<ResponseTambahP> img = upimg.uploadimage(partImage);
        img.enqueue(new Callback<ResponseTambahP>() {
            @Override
            public void onResponse(Call<ResponseTambahP> call, Response<ResponseTambahP> response) {
                finish();
            }

            @Override
            public void onFailure(Call<ResponseTambahP> call, Throwable t) {
                Toast.makeText(TmbhDataActivity.this, "gagal"+t, Toast.LENGTH_SHORT).show();
            }
        });
    }

}
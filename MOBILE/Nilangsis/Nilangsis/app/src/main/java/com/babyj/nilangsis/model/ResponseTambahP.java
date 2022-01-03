package com.babyj.nilangsis.model;

import com.google.gson.annotations.SerializedName;

public class ResponseTambahP {

    @SerializedName("kode")
    int kode;
    @SerializedName("pesan")
    String pesan;

    public int getKode() {
        return kode;
    }

    public void setKode(int kode) {
        this.kode = kode;
    }

    public String getPesan() {
        return pesan;
    }

    public void setPesan(String pesan) {
        this.pesan = pesan;
    }
}

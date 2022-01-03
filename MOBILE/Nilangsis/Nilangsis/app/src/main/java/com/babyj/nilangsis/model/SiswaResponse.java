package com.babyj.nilangsis.model;

import java.util.List;

public class SiswaResponse {

    private int code;
    private String status;
    private List<Siswa> data;

    public int getCode() {
        return code;
    }

    public void setCode(int code) {
        this.code = code;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public List<Siswa> getData() {
        return data;
    }

    public void setData(List<Siswa> data) {
        this.data = data;
    }
}

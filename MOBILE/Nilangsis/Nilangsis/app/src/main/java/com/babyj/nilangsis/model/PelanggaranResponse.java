package com.babyj.nilangsis.model;

import java.util.List;

public class PelanggaranResponse {

    private int code;
    private String status;
    private List<Pelanggaran> data;

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

    public List<Pelanggaran> getData() {
        return data;
    }

    public void setData(List<Pelanggaran> data) {
        this.data = data;
    }
}

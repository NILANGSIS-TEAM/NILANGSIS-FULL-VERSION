package com.babyj.nilangsis.model;

import java.util.List;

public class HisResponse {

    private int code;
    private String status;
    private List<His> data;

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

    public List<His> getData() {
        return data;
    }

    public void setData(List<His> data) {
        this.data = data;
    }
}

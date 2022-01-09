package com.babyj.nilangsis.api;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;

import com.babyj.nilangsis.activity.LoginActivity;

import java.util.HashMap;

public class SessionManager {

    private SharedPreferences sp;
    private SharedPreferences.Editor editor;
    private static final String KEY_USERNAME = "username";
    public static final String KEY_NIP = "nip";
    private final String SHARE_NAME = "loginsession";
    private static final String is_login = "LogginStatus";
    private final int MODE_PRIVATE = 0;
    public Context _context;

    public SessionManager(Context context){
        this._context = context;
        sp = _context.getSharedPreferences(SHARE_NAME,MODE_PRIVATE);
        editor = sp.edit();
    }

    public void storeLogin(Context context){
        editor.putBoolean(is_login, true);
        editor.putString(KEY_USERNAME, "username");
        editor.putString(KEY_NIP, "nip");
        editor.commit();
    }

    public HashMap getDataLogin(){
        HashMap<String, String> map = new HashMap<>();
        map.put(KEY_NIP, sp.getString(KEY_NIP, null));
        map.put(KEY_USERNAME, sp.getString(KEY_USERNAME, null));
        return map;
    }

    public void checkLogin(){
        if (!this.Loggin()){
            Intent login = new Intent(_context, LoginActivity.class).addFlags(Intent.FLAG_ACTIVITY_NO_HISTORY);
            _context.startActivity(login);
        }
    }
    
    public boolean Loggin(){
        return sp.getBoolean(is_login, false);
    }

    public void Logout(){
        editor.clear();
        editor.commit();
    }
}

package com.foxy.arrive5.logger;

import android.util.Log;

import com.foxy.arrive5.utils.Constants;


public class Logger {

    public static void e(String target, String mes) {
        if (Constants.DEBUG) {
            Log.e(target, mes);
        }
    }

    public static void i(String target, String mes) {
        if (Constants.DEBUG) {
            Log.i(target, mes);
        }
    }

    public static void v(String target, String mes) {
        if (Constants.DEBUG) {
            Log.v(target, mes);
        }
    }

    public static void w(String target, String mes) {
        if (Constants.DEBUG) {
            Log.w(target, mes);
        }
    }

    public static void d(String target, String mes) {
        if (Constants.DEBUG) {
            Log.d(target, mes);
        }
    }
}

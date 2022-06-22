package com.mobi.arrive5d.Response;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

/**
 * Created by parangat on 4/25/18.
 */

public class UpdateStatusResponse {

    @SerializedName("onLineStatus")
    @Expose
    private String onLineStatus;
    @SerializedName("message")
    @Expose
    private String message;
    @SerializedName("status")
    @Expose
    private String status;

    public String getOnLineStatus() {
        return onLineStatus;
    }

    public String getMessage() {
        return message;
    }

    public String getStatus() {
        return status;
    }
}

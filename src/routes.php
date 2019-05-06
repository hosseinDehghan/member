<?php

Route::group(['middleware' => ['web']], function () {
    Route::get("signup","Hosein\Members\Controllers\SignupController@index");
    Route::post("signup","Hosein\Members\Controllers\SignupController@signup")->name("signup");
    Route::get("signin","Hosein\Members\Controllers\SigninController@index");
    Route::post("signin","Hosein\Members\Controllers\SigninController@signIn")->name("signin");
    Route::get("Mlogout","Hosein\Members\Controllers\SigninController@Mlogout")->name("Mlogout");
});

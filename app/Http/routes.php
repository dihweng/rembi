<?php

Route::group(['middleware' => 'web'], function() {
    Route::get('/', ['middleware' => 'auth', function () {
        return view('welcome');
    }]);
    
    Route::get('login', 'AuthenticationController@showLogin');
    Route::post('login', 'AuthenticationController@doLogin');
    
    Route::get('frontdesk/welcome', function() {
        return view('frontdesk.welcome');
    });
    Route::get('account/welcome', function() {
        return view('account.welcome');
    });
});
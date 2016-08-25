<?php

Route::group(['middleware' => 'web'], function() {
    Route::get('/', ['middleware' => 'auth', function () {
        return view('welcome');
    }]);

    Route::get('login', 'AuthenticationController@showLogin');
    Route::post('login', 'AuthenticationController@doLogin');

    Route::group(['prefix' => 'frontdesk'], function() {
        Route::get('/', 'FrontdeskController@welcome');
    });

    Route::group(['prefix' => 'account'], function() {
        Route::get('/', 'AccountController@welcome');
    });
});

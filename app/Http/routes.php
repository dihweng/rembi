<?php

Route::group(['middleware' => 'web'], function() {
    Route::get('/', ['middleware' => 'auth', function () {
        return view('welcome');
    }]);

    Route::get('login', 'AuthenticationController@showLogin');
    Route::post('login', 'AuthenticationController@doLogin');

    Route::group(['prefix' => 'frontdesk'], function() {
        Route::get('/', 'FrontdeskController@dashboard')->name('frontdesk_dashboard');
        Route::get('patient/register', 'FrontdeskController@registerPatient')->name('register_patient');
        Route::get('family/register', 'FrontdeskController@registerFamily')->name('register_family');
        Route::get('corporate/register', 'FrontdeskController@registerCorporate')->name('register_corporate');
    });
});

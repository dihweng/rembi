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
    
    Route::group(['prefix' => 'patient'], function() {
        Route::post('store', 'PatientController@store')->name('patient_store');
    });
    
    //routes for corporate
    Route::group(['prefix' => 'corporate'], function() {
       Route::post('corporate/store', 'CorporateController@store')->name('corporate_store');
       Route::get('corporate/index', 'CorporateController@index')->name('corporate_index');
    });
    
    //Route Family
    Route::group(['prefix' => 'family'], function() {
       Route::post('family/store', 'FamilyController@store')->name('family_store'); 
       Route::get('family/index', 'FamilyController@showindex')->name('family_index');

    });
});
 
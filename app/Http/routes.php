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
        Route::post('patient/register', 'PatientController@store')->name('store_patient');
        Route::get('patient/welcome', 'FrontdeskController@welcomePatient')->name('patient_welcome');
        Route::post('patient/found', 'PatientController@searchPatientId')->name('found_patient');
        Route::get('family/register', 'FrontdeskController@registerFamily')->name('register_family');
        Route::post('family/register', 'FamilyController@store')->name('store_family');
        Route::get('corporate/register', 'FrontdeskController@registerCorporate')->name('register_corporate');
        Route::post('corporate/register', 'CorporateController@store')->name('store_corporate');
    });
    
    Route::group(['prefix' => 'account'], function() {
        Route::get('/', 'AccountController@dashboard')->name('account_dashboard');
        Route::get('service/create', 'AccountController@registerService')->name('register_service');
        Route::post('service/create', 'ServiceController@store')->name('store_service');
        Route::get('inventory/create', 'AccountController@registerInventory')->name('register_inventory');
        Route::post('inventory/create', 'InventoryItemController@store')->name('store_inventory');
        
    });
    
});

<?php
/**
 * Created by PhpStorm.
 * User: reubenwedson
 * Date: 7/2/19
 * Time: 9:03 AM
 */
Route::group(['namespace' => 'Services', 'as' => 'service.', 'prefix' => ''], function () {

    Route::get('/strategy','ServicesController@strategy')->name('strategy');
    Route::get('/operations','ServicesController@operations')->name('operations');
    Route::get('/sustainability','ServicesController@sustainability')->name('sustainability');
    Route::get('/analystics_consulting','ServicesController@analysticsConsulting')->name('analystics_consulting');
    Route::get('/transformation','ServicesController@transformation')->name('transformation');
    Route::get('/risk_management','ServicesController@riskManagement')->name('risk_management');
    Route::get('/business_development','ServicesController@businessDevelopment')->name('business_development');
    Route::get('/law_service','ServicesController@lawService')->name('law_service');




});

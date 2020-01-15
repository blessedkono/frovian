<?php
/**
 * Created by PhpStorm.
 * User: reubenwedson
 * Date: 7/2/19
 * Time: 9:03 AM
 */
Route::group(['namespace' => 'Information', 'as' => 'information.', 'prefix' => ''], function () {

    Route::get('/about_us','InformationController@aboutUs')->name('about_us');
    Route::get('/contact_us','InformationController@contactUs')->name('contact_us');
    Route::get('/publication','InformationController@publication')->name('publication');




});

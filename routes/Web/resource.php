<?php
/**
 * Created by PhpStorm.
 * User: reubenwedson
 * Date: 7/2/19
 * Time: 9:03 AM
 */
Route::group(['namespace' => 'Resource', 'as' => 'resource.', 'prefix' => ''], function () {

    Route::get('/about_us','ResourcesController@about_us')->name('get_stated');


});

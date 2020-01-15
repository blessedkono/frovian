<?php
/**
 * Created by PhpStorm.
 * User: reubenwedson
 * Date: 7/2/19
 * Time: 9:03 AM
 */
Route::group(['namespace' => 'Service', 'as' => 'service.', 'prefix' => ''], function () {

    Route::get('/get_started','ResourcesController@getStartedPage')->name('get_stated');


});

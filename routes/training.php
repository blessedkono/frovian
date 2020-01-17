<?php
/**
 * Created by PhpStorm.
 * User: reubenwedson
 * Date: 7/2/19
 * Time: 9:03 AM
 */
Route::group(['namespace' => 'Training', 'as' => 'training.', 'prefix' => ''], function () {

    Route::get('/law_training','TrainingController@law')->name('law');
    Route::get('/coaching_training','TrainingController@coaching')->name('coaching');
    Route::get('/risk_training','TrainingController@risk')->name('risk');
    Route::get('/academic','TrainingController@academic')->name('academic');

});

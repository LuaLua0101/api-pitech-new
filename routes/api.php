<?php
Route::post('login', 'ApiController@login');
Route::get('logout', 'ApiController@logout');

Route::group(['prefix' => 'home'], function () {
    Route::get('', 'HomeController@getHome');
});

Route::group(['prefix' => 'teach-me-series'], function () {
    Route::post('', 'HomeController@getTeachMeSeries');
    Route::post('/detail', 'HomeController@getTeachMeSerieDetail');
});

Route::group(['prefix' => 'iot-hub'], function () {
    Route::post('', 'HomeController@getIotHub');
});

Route::group(['prefix' => 'press-resources'], function () {
    Route::post('', 'HomeController@getPressResource');
});

Route::group(['prefix' => 'applications'], function () {
    Route::get('', 'HomeController@getApplication');
});

Route::group(['prefix' => 'careers'], function () {
    Route::get('', 'HomeController@getCareers');
});

Route::group(['prefix' => 'manuals'], function () {
    Route::get('', 'HomeController@getManuals');
});

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('', 'HomeController@getHome');
    });
});

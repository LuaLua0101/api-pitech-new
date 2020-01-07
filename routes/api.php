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
    Route::post('/detail', 'HomeController@getIotHubDetail');
});

Route::group(['prefix' => 'press-resources'], function () {
    Route::post('', 'HomeController@getPressResource');
    Route::post('/detail', 'HomeController@getPressResourceDetail');
});

Route::group(['prefix' => 'applications'], function () {
    Route::get('', 'HomeController@getApplication');
});

Route::group(['prefix' => 'careers'], function () {
    Route::get('/{lang}', 'HomeController@getCareers');
});

Route::group(['prefix' => 'related-products'], function () {
    Route::get('/{lang}', 'HomeController@getRelatedProducts');
});

Route::group(['prefix' => 'buildings'], function () {
    Route::get('/{lang}', 'HomeController@getBuildings');
});

Route::group(['prefix' => 'manuals'], function () {
    Route::get('', 'HomeController@getManuals');
});

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('', 'HomeController@getHome');
    });
});

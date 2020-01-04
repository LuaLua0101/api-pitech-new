<?php
Route::middleware(['runall'])->group(function () {
    Route::get('/', 'AdminController@index')->name('home');

    Auth::routes();

    Route::get('/home', 'AdminController@index')->name('home');

    // Admin ***************************************
    Route::prefix('/ad')->group(function () {

        Route::get('/login', 'AdminController@getLogin')->name('adgetLogin');
        Route::post('/login', 'AdminController@postLogin')->name('adpostLogin');

        Route::middleware(['check_admin'])->group(function () {

            // Home
            Route::get('/', 'AdminController@getHome')->name('adgetHome');
            Route::post('/config', 'AdminController@updateConfig')->name('adupdateConfig');
            // User
            Route::post('/user-add', 'AdminController@postAddUser')->name('adpostAddUser');
            Route::get('/user', 'AdminController@getListUser')->name('adgetListUser');
            Route::get('/user-del/{id}', 'AdminController@getDelUser')->name('adgetDelUser');
            Route::post('/update-password', 'AdminController@postUpdatePassword')->name('adpostUpdatePassword');

            Route::post('/upload-img', 'AdminController@uploadImage')->name('uploadImage');
            //Teachme series
            Route::get('/news-add', 'AdminController@getAddTeachMeSeries')->name('adgetAddNews');
            Route::post('/news-add', 'AdminController@postAddTeachMeSeries')->name('adpostAddNews');
            Route::get('/news-edit/{id}', 'AdminController@getEditTeachMeSeries')->name('adgetEditNews');
            Route::post('/news-edit/{id}', 'AdminController@postEditTeachMeSeries')->name('adpostEditNews');
            Route::get('/news', 'AdminController@getListTeachMeSeries')->name('adgetListNews');
            Route::get('/news-del/{id}', 'AdminController@getDelTeachMeSeries')->name('adgetDelNews');
            // IotHub
            Route::get('/iot-add', 'IotHubController@getAddIotHub')->name('adgetAddIotHub');
            Route::post('/iot-add', 'IotHubController@postAddIotHub')->name('adpostAddIotHub');
            Route::get('/iot-edit/{id}', 'IotHubController@getEditIotHub')->name('adgetEditIotHub');
            Route::post('/iot-edit/{id}', 'IotHubController@postEditIotHub')->name('adpostEditIotHub');
            Route::get('/iot', 'IotHubController@getListIotHub')->name('adgetListIotHub');
            Route::get('/iot-del/{id}', 'IotHubController@getDelIotHub')->name('adgetDelIotHub');
        });

    });
    // END Admin ***********
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('getHome');

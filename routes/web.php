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

            // Product
            Route::get('/product-add', 'AdminController@getAddProduct')->name('adgetAddProduct');
            Route::post('/product-add', 'AdminController@postAddProduct')->name('adpostAddProduct');
            Route::get('/product-edit/{id}', 'AdminController@getEditProduct')->name('adgetEditProduct');
            Route::post('/product-edit/{id}', 'AdminController@postEditProduct')->name('adpostEditProduct');
            Route::get('/product/{query?}', 'AdminController@getListProduct')->name('adgetListProduct');
            Route::get('/product-del/{id}', 'AdminController@getDelProduct')->name('adgetDelProduct');
            // News
            Route::get('/news-add', 'AdminController@getAddTeachMeSeries')->name('adgetAddNews');
            Route::post('/news-add', 'AdminController@postAddTeachMeSeries')->name('adpostAddNews');
            Route::get('/news-edit/{id}', 'AdminController@getEditTeachMeSeries')->name('adgetEditNews');
            Route::post('/news-edit/{id}', 'AdminController@postEditTeachMeSeries')->name('adpostEditNews');
            Route::get('/news', 'AdminController@getListTeachMeSeries')->name('adgetListNews');
            Route::get('/news-del/{id}', 'AdminController@getDelTeachMeSeries')->name('adgetDelNews');
        });

    });
    // END Admin ***********
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('getHome');

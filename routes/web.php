<?php
Route::middleware(['runall'])->group(function () {
    Auth::routes();

    Route::get('/vi', 'AdminController@change2Vi')->name('change2Vi');
    Route::get('/en', 'AdminController@change2En')->name('change2En');

    Route::get('/', 'AdminController@index')->name('home');
    // Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/teach-me-series', 'AdminController@teachMeIndex')->name('teachMeIndex');
    Route::get('/teach-me-serie/{id}', 'AdminController@teachMeDetail')->name('teachMeDetail');
    Route::post('/teach-me-serie/add-comment/{id}', 'HomeController@addTeachmeComment')->name('teachMeComment');
    Route::get('/teach-me-loadmore/{skip}', 'AdminController@teachMeLoadMore')->name('teachMeLoadMore');

    Route::get('/iot-hubs', 'IotHubController@index')->name('IotHub');
    Route::get('/iot-hub/{id}', 'IotHubController@iotHubDetail')->name('iotHubDetail');
    Route::post('/iot-hub/add-comment/{id}', 'IotHubController@addIotComment')->name('addIotComment');
    Route::get('/iot-hub-loadmore/{skip}', 'IotHubController@iotHubLoadMore')->name('iotHubLoadMore');

    Route::get('/press-resources', 'PressResourceController@index')->name('PressResources');
    Route::get('/press-resource-loadmore/{skip}', 'PressResourceController@pressLoadMore')->name('pressLoadMore');

    Route::get('/related-products', 'RelatedProductController@index')->name('RelatedProducts');
    Route::get('/applications', 'ApplicationsController@index')->name('Applications');
    Route::get('/careers', 'CareerController@index')->name('Careers');
    Route::get('/building-the-future', 'BuildingController@index')->name('BuildingFuture');

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
            Route::get('/news-pin/{id}', 'AdminController@getPinTeachMeSeries')->name('adgetPinNews');
            // IotHub
            Route::get('/iot-add', 'IotHubController@getAddIotHub')->name('adgetAddIotHub');
            Route::post('/iot-add', 'IotHubController@postAddIotHub')->name('adpostAddIotHub');
            Route::get('/iot-edit/{id}', 'IotHubController@getEditIotHub')->name('adgetEditIotHub');
            Route::post('/iot-edit/{id}', 'IotHubController@postEditIotHub')->name('adpostEditIotHub');
            Route::get('/iot', 'IotHubController@getListIotHub')->name('adgetListIotHub');
            Route::get('/iot-del/{id}', 'IotHubController@getDelIotHub')->name('adgetDelIotHub');
            Route::get('/iot-pin/{id}', 'IotHubController@getPinIotHub')->name('adgetPinIotHub');
            // Press Resources
            Route::get('/press-add', 'PressResourceController@getAddPressResource')->name('adgetAddPressResource');
            Route::post('/press-add', 'PressResourceController@postAddPressResource')->name('adpostAddPressResource');
            Route::get('/press-edit/{id}', 'PressResourceController@getEditPressResource')->name('adgetEditPressResource');
            Route::post('/press-edit/{id}', 'PressResourceController@postEditPressResource')->name('adpostEditPressResource');
            Route::get('/press', 'PressResourceController@getListPressResource')->name('adgetListPressResource');
            Route::get('/press-del/{id}', 'PressResourceController@getDelPressResource')->name('adgetDelPressResource');
            // Applications
            Route::get('/app-add', 'ApplicationsController@getAddApplication')->name('adgetAddApplications');
            Route::post('/app-add', 'ApplicationsController@postAddApplication')->name('adpostAddApplications');
            Route::get('/app-edit/{id}', 'ApplicationsController@getEditApplication')->name('adgetEditApplications');
            Route::post('/app-edit/{id}', 'ApplicationsController@postEditApplication')->name('adpostEditApplications');
            Route::get('/app', 'ApplicationsController@getListApplication')->name('adgetListApplications');
            Route::get('/app-del/{id}', 'ApplicationsController@getDelApplication')->name('adgetDelApplications');
            // RelatedProduct
            Route::get('/related-product-edit/{id}', 'RelatedProductController@getEditRelatedProduct')->name('adgetEditRelatedProduct');
            Route::post('/related-product-edit/{id}', 'RelatedProductController@postEditRelatedProduct')->name('adpostEditRelatedProduct');
            Route::get('/related-product', 'RelatedProductController@getListRelatedProduct')->name('adgetListRelatedProduct');
            Route::get('/related-product-del/{id}', 'RelatedProductController@getDelRelatedProduct')->name('adgetDelRelatedProduct');
            // Manual Type
            Route::get('/manual-type-add', 'ManualTypeController@getAddManualType')->name('adgetAddManualType');
            Route::post('/manual-type-add', 'ManualTypeController@postAddManualType')->name('adpostAddManualType');
            Route::get('/manual-type-edit/{id}', 'ManualTypeController@getEditManualType')->name('adgetEditManualType');
            Route::post('/manual-type-edit/{id}', 'ManualTypeController@postEditManualType')->name('adpostEditManualType');
            Route::get('/manual-type', 'ManualTypeController@getListManualType')->name('adgetListManualType');
            Route::get('/manual-type-del/{id}', 'ManualTypeController@getDelManualType')->name('adgetDelManualType');
            // Manual
            Route::get('/manual-add', 'ManualController@getAddManual')->name('adgetAddManual');
            Route::post('/manual-add', 'ManualController@postAddManual')->name('adpostAddManual');
            Route::get('/manual-edit/{id}', 'ManualController@getEditManual')->name('adgetEditManual');
            Route::post('/manual-edit/{id}', 'ManualController@postEditManual')->name('adpostEditManual');
            Route::get('/manual', 'ManualController@getListManual')->name('adgetListManual');
            Route::get('/manual-del/{id}', 'ManualController@getDelManual')->name('adgetDelManual');
            // Building The Futures
            Route::get('/building-add', 'BuildingController@getAddBuilding')->name('adgetAddBuilding');
            Route::post('/building-add', 'BuildingController@postAddBuilding')->name('adpostAddBuilding');
            Route::get('/building-edit/{id}', 'BuildingController@getEditBuilding')->name('adgetEditBuilding');
            Route::post('/building-edit/{id}', 'BuildingController@postEditBuilding')->name('adpostEditBuilding');
            Route::get('/building', 'BuildingController@getListBuilding')->name('adgetListBuilding');
            Route::get('/building-del/{id}', 'BuildingController@getDelBuilding')->name('adgetDelBuilding');
            // Careers
            Route::get('/career-add', 'CareerController@getAddCareer')->name('adgetAddCareer');
            Route::post('/career-add', 'CareerController@postAddCareer')->name('adpostAddCareer');
            Route::get('/career-edit/{id}', 'CareerController@getEditCareer')->name('adgetEditCareer');
            Route::post('/career-edit/{id}', 'CareerController@postEditCareer')->name('adpostEditCareer');
            Route::get('/career', 'CareerController@getListCareer')->name('adgetListCareer');
            Route::get('/career-del/{id}', 'CareerController@getDelCareer')->name('adgetDelCareer');
            // Banners
            Route::get('/banner-edit/{id}', 'BannerController@getEditBanner')->name('adgetEditBanner');
            Route::post('/banner-edit/{id}', 'BannerController@postEditBanner')->name('adpostEditBanner');
            Route::get('/banner', 'BannerController@getListBanner')->name('adgetListBanner');
            Route::get('/banner-del/{id}', 'BannerController@getDelBanner')->name('adgetDelBanner');

        });

    });
    // END Admin ***********
});
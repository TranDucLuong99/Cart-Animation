<?php
///*
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: Authorization, X-CSRF-Token, x-test-header, Origin, X-Requested-With, Content-Type, Accept' );
//header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
//*/
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
////Proxy
//Route::get('/proxy', 'AppProxyController@index')->middleware('auth.proxy');
//
////Route::group(['middleware' => 'auth'], function () {
//Route::group(['middleware' => ['web']], function(){
//    Route::post('/webhook/shop-redact', 'ProductreviewsController@shopRedact');
//    Route::post('/webhook/customers-redact', 'ProductreviewsController@customersRedact');
//    Route::post('/webhook/customers-data-request', 'ProductreviewsController@customersDataRequest');
//    //payment declined.
//    Route::get(
//        '/declined',
//        'ProductreviewsController@declined'
//    )
//    ->name('declined');
//    //Plan controller
//    Route::get('plan', 'PlanController@index')->name('plan');
//
//    //User Guide
//    Route::get(
//        '/userguide',
//        'ProductreviewsController@userguide'
//    )
//    ->name('userguide');
//
//    Route::post('/publishToTheme', 'ProductreviewsController@publishToTheme')->name('publishToTheme');
//    Route::get('/publishToTheme', function(){
//        abort(404,'Page not found');
//    });
//
//    //backend
//    Route::get(
//        '/',
//        'ProductreviewsController@index'
//    )
//    ->middleware(['auth.shop', 'billable'])
//    ->name('home');
//
//
//
//});

Route::get('/', function () {
    return view('welcome');
});

//Proxy
Route::get('/proxy', 'AppProxyController@index')->middleware('auth.proxy');
Route::get('/proxy/post-all', 'AppProxyController@post_all')->middleware('auth.proxy');
Route::get('/proxy/post-all/detail/{id}', 'AppProxyController@post_detail')->middleware('auth.proxy');
Route::get('/proxy/post-all/slider', 'AppProxyController@post_slider')->middleware('auth.proxy');
Route::get('/proxy/category-all', 'AppProxyController@category_all')->middleware('auth.proxy');
Route::get('/proxy/navbar', 'AppProxyController@navbar')->middleware('auth.proxy');
Route::get('/proxy/nav', 'AppProxyController@nav')->middleware('auth.proxy');

//Route::group(['middleware' => 'auth'], function () {
Route::group(['middleware' => ['web']], function () {
    Route::post('/webhook/shop-redact', 'ProductreviewsController@shopRedact');
    Route::post('/webhook/customers-redact', 'ProductreviewsController@customersRedact');
    Route::post('/webhook/customers-data-request', 'ProductreviewsController@customersDataRequest');
    //payment declined.
    Route::get(
        '/declined',
        'ProductreviewsController@declined'
    )
        ->name('declined');
    //Plan controller
    Route::get('plan', 'PlanController@index')->name('plan');

    //User Guide
    Route::get(
        '/userguide',
        'ProductreviewsController@userguide'
    )
        ->name('userguide');

    Route::post('/publishToTheme', 'ProductreviewsController@publishToTheme')->name('publishToTheme');
    Route::get('/publishToTheme', function () {
        abort(404, 'Page not found');
    });

    //backend
    Route::get(
        '/',
        'CartAnimationController@index'
    )
        ->middleware(['auth.shop', 'billable'])
        ->name('home');
    Route::get('cartAnimation', 'CartAnimationController@index')->name('cartAnimation.index');
    Route::get('add-cartAnimation', 'CartAnimationController@add_cartAnimation')->name('add_cartAnimation');
    Route::get('cart-ani', 'CartAnimationController@cart_ani')->name('cart-ani.index');

});

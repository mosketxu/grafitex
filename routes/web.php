<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
    'register' => false,
]);

// Auth::routes();

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('user', 'UserController');//->middleware('admin');
    
    Route::resource('store', 'StoreController');//->middleware('admin');
    // ruta stores asociadas
    Route::group(['prefix' => 'campaign'], function () {
        require __DIR__ .'/storesAsociadas.php';
    });

    Route::resource('address', 'AddressController');//->middleware('admin');
    
    Route::resource('campaign', 'CampaignController');//->middleware('admin');
    
    Route::resource('element', 'ElementController');//->middleware('admin');


});
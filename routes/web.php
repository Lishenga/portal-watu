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


Route::get('/', [ 'as' => 'login', 'uses' => 'ViewController@index']);
Route::get('logout','ViewController@getLogout');
Route::post('signing','ViewController@signin');


Route::prefix('customers')->middleware('auth')->group(function () {

    Route::get('/','Customers\ViewsController@index');
    Route::get('/create','Customers\CustomersController@index');
    Route::get('/view/details','Customers\CustomersController@ViewCustomer');
    Route::post('/create','Customers\CustomersController@create');
    Route::post('/update','Customers\CustomersController@update');
    Route::get('/delete','Customers\CustomersController@delete');
    Route::get('/register/stripe','Customers\CustomersController@registerStripe');
    Route::get('/transactions','Customers\CustomersController@customer_transactions');
    Route::post('/cards/update','Customers\CustomersController@customer_cards');

});

Route::prefix('transactions')->middleware('auth')->group(function () {

    Route::get('/','Transactions\ViewsController@view');

});


Route::prefix('care')->middleware('auth')->group(function () {

    Route::get('/','Customers\CareController@view');

});



Route::prefix('roles')->middleware('auth')->group(function () {

    Route::get('/','RoleController@index');
    Route::post('/create','RoleController@create');
    Route::POST('/update','RoleController@update');
    Route::get('/enabling','RoleController@enabling');
    Route::get('/particular','RoleController@particular');
});

Route::prefix('permissions')->middleware('auth')->group(function () {

    Route::get('/','PermissionController@index');
    Route::post('/create','PermissionController@create');
    Route::POST('/update','PermissionController@update');
    Route::get('/delete','PermissionController@delete');
});


Route::prefix('settings')->middleware('auth')->group(function () {

    Route::get('/','Settings\ViewsController@index');

    //RatesController Routes
    Route::get('/rates','Settings\RatesController@view');
    Route::POST('/rates/create','Settings\RatesController@create');
    Route::POST('/rates/update','Settings\RatesController@update');
    Route::get('/rates/delete/','Settings\RatesController@delete');


     //UsersController Routes
     Route::get('/users','Settings\UsersController@view');
     Route::POST('/users/create','Settings\UsersController@create');
     Route::POST('/users/update','Settings\UsersController@update');
     Route::get('/users/enabling','Settings\UsersController@enabling');
     Route::get('/users/particular','Settings\UsersController@particular');


     //TariffController Routes
     Route::get('/tariffs','Settings\TariffsController@view');
     Route::POST('/tariffs/create','Settings\TariffsController@create');
     Route::POST('/tariffs/update','Settings\TariffsController@update');
     Route::get('/tariffs/delete/','Settings\TariffsController@delete');
     Route::POST('/tariffs/search','Settings\TariffsController@search');


      //CountriesController Routes
      Route::get('/country','Settings\CountriesController@view');
      Route::POST('/country/create','Settings\CountriesController@create');
      Route::POST('/country/update','Settings\CountriesController@update');
      Route::get('/country/delete/','Settings\CountriesController@delete');


});

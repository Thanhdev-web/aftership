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


//
Route::get('/', [
    'as' => 'page',
    'uses' => 'PageController@getPage'
]);

Route::get('dataPage', 'PageController@dataPage')->name('dataPage');

Route::get('pendingPage', 'PageController@pendingPage')->name('pendingPage');


Route::get('getdatapaypal', 'PageController@getpaypal')->name('getpaypal');

Route::get('pending',[
    'as' => 'pending',
    'uses' => 'PageController@getpending'
]);

Route::get('getpay_pal', 'PageController@getdata')->name('getpay_pal');

Route::get('paypal_table', 'PageController@getPaypal_table')->name('paypal_table');

Route::get('paypal_account',[
   'as'=> 'paypal_account',
   'uses' => 'PageController@GetPaypalAccount'
]);

Route::get('data_acconut',[
   'as' => 'data_acconut',
   'uses' => 'PageController@GetDataAccount'
]);

Route::post('add_account',[
    'as' => 'add_account',
    'uses' => 'PageController@AddAccount'
]);

Route::get('test', [
    'as' => 'test',
    'uses' => 'PageController@test'
]);

Route::post('export', 'PageController@export');

Route::post('import', 'PageController@import')->name('import');

Route::POST('call', [
    'as' => 'callall',
    'uses' => 'PageController@CallTracking',

]);

Route::get('mapping', [
    'as' => 'mapping',
    'uses' => 'PageController@getMapping'
]);

Route::post('find_date', [
    'as' => 'find_date',
    'uses' => 'PageController@find_date'
]);

//Edit row

Route::post('Edit_tracking', 'PageController@postEdit');

Route::post('Edit_paypal', 'PageController@ ');

Route::post('Detail_tracking', 'PageController@Detail');


Route::resource('datatables', 'PageController');

Route::POST('exportTracking', 'PageController@exportTracking');









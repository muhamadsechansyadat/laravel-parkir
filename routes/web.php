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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'parkir'],function(){
	Route::get('/','ParkirController@index');
});
Route::get('/lahan','LahanController@lahan');
Route::patch('updatelahan/{id}','LahanController@updatelahan');

Route::get('/parkiranku','ParkirController@input');
Route::post('/simpanparkir','ParkirController@simpanparkir');

Route::get('/parkiranku/dataparkir','ParkirController@dataparkir');

Route::get('/hapus/{id}','ParkirController@hapus');

Route::get('/edit/{id}','ParkirController@edit');

Route::patch('/updateparkir/{id}','ParkirController@updateparkir');

Route::get('/transaksi/{id}', 'ParkirController@transaksi');

Route::post('/simpantransaksi',  'TransaksiController@simpantransaksi');

Route::get('/struk/{id}', 'TransaksiController@struk');

Route::get('/struk1/{id}', 'TransaksiController@struk1');

Route::get('/laporansemua', 'ParkirController@laporansemua');

Route::get('/laporantransaksi', 'ParkirController@laporantransaksi');

Route::get('/query', 'ParkirController@query');

Route::get('/laporanhari', 'ParkirController@laporanhari');
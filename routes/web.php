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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::resource('admin', 'AdminController');
Route::resource('supplier', 'SupplierController');
Route::get('supplier', 'SupplierController@index')->name('supplier');
Route::resource('pelanggan', 'PelangganController');
Route::get('pelanggan', 'PelangganController@index')->name('pelanggan');
Route::resource('sales', 'SalesController');
Route::get('sales', 'SalesController@index')->name('sales');
Route::resource('produk', 'ProdukController');
Route::get('produk', 'ProdukController@index')->name('produk');
Route::resource('merk', 'MerkController');
Route::get('merk', 'MerkController@index')->name('merk');
Route::resource('jenis', 'JenisController');
Route::get('jenis', 'JenisController@index')->name('jenis');
Route::resource('satuan', 'SatuanController');
Route::get('satuan', 'SatuanController@index')->name('satuan');

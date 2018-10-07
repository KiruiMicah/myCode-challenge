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
Route::resource('Company','CompanyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Display view
//Route::get('datatable', 'DataTableController@datatable');
// Get Data
Route::get('index', 'CompanyController@index');
Route::get('loadmyinfodata', 'CompanyController@getData')->name('loadmyinfodata');
Route::get('getinfodata', 'CompanyController@getcloud_data')->name('getinfodata');


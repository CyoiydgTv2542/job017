<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/role-register', 'Admin\DashboardController@registered');

Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

//หน้าบันทึกข้อมูล
Route::resource('rooms','RoomController');
Route::resource('advices','AdviceController');
Route::resource('patterns','PatternController');

//ฟอร์มกรอกข้อมูล
Route::get('/form','FormController@index')->name('form');
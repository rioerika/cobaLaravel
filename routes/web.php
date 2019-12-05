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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','pagesController@home');
Route::get('/about','pagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/students', 'StudentsControllers@index');
Route::get('/students/create', 'StudentsControllers@create');
Route::get('/students', 'StudentsControllers@store');

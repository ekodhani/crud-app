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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'EmployeeController@index');
Route::get('/create', 'EmployeeController@create');
Route::get('/detail/{employe}', 'EmployeeController@show');
Route::get('/edit/{employe}', 'EmployeeController@edit');
Route::get('/delete/{employee}', 'EmployeeController@destroy');
Route::put('/update/{employe}', 'EmployeeController@update');
Route::post('/post', 'EmployeeController@store');

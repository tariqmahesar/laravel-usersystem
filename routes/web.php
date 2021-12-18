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

Route::get('/todos','\App\Http\Controllers\TodoController@index');
Route::get('/todos/create', '\App\Http\Controllers\TodoController@create');
Route::post('/todos/create', '\App\Http\Controllers\TodoController@store');
Route::get('/todos/edit/{id}', '\App\Http\Controllers\TodoController@edit');
Route::patch('/todos/update/{id}', '\App\Http\Controllers\TodoController@update');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

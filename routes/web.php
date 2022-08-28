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
    // return view('Auth/register');
    return view('Auth/login');
    // return view('layouts/menu_admin');

});

// Auth routes
Route::prefix('Auth/')->name('auth.')->group(function()
{
    Route::get('register','App\Http\Controllers\AuthLoginController@create')->name('register');
    Route::get('login','App\Http\Controllers\AuthLoginController@index')->name('login');
});

Route::prefix('administration/')->name('administration.')->group(function()
{
    Route::get('asistance','App\Http\Controllers\EmployeeAdministrationController@asistance')->name('asistance');
    Route::get('schedules','App\Http\Controllers\EmployeeAdministrationController@schedules')->name('schedules');
});
Route::resource('administration','App\Http\Controllers\EmployeeAdministrationController');

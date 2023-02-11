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

// Configuration Employees Routes
Route::prefix('employees/')->name('employees.')->group(function()
{
    Route::get('search','App\Http\Controllers\EmployeesConfigurationController@search')->name('search');
    Route::get('search/{id}/view','App\Http\Controllers\EmployeesConfigurationController@view')->name('view');
    Route::get('user','App\Http\Controllers\EmployeesConfigurationController@getUser')->name('getUser');
    Route::get('search/{id}/suspend','App\Http\Controllers\EmployeesConfigurationController@suspend')->name('suspend');
    Route::get('search/{id}/active','App\Http\Controllers\EmployeesConfigurationController@active')->name('active');
});
Route::resource('employees','App\Http\Controllers\EmployeesConfigurationController');

// Configuration Users Routes
Route::prefix('configuration/users/')->name('users.')->group(function()
{
    Route::get('search','App\Http\Controllers\UsersConfigurationController@search')->name('search');
    Route::get('search/{id}/view','App\Http\Controllers\UsersConfigurationController@view')->name('view');
    Route::get('search/{id}/suspend','App\Http\Controllers\UsersConfigurationController@suspend')->name('suspend');
    Route::get('search/{id}/active','App\Http\Controllers\UsersConfigurationController@active')->name('active');
});
Route::resource('users','App\Http\Controllers\UsersConfigurationController');

// Assistance Routes
Route::prefix('assistance/')->name('assistance.')->group(function()
{
    Route::get('search','App\Http\Controllers\AssistanceAdministrationController@search')->name('search');
});
Route::resource('assistance','App\Http\Controllers\AssistanceAdministrationController');

// Home Routes
Route::prefix('home/')->name('home.')->group(function()
{
    Route::get('search','App\Http\Controllers\HomeAdministrationController@search')->name('search');
});
Route::resource('home','App\Http\Controllers\HomeAdministrationController');

// Schedules Routes
Route::prefix('schedules/')->name('schedules.')->group(function()
{
    Route::get('assign','App\Http\Controllers\SchedulesAdministrationController@assign')->name('assign');
});
Route::resource('schedules','App\Http\Controllers\SchedulesAdministrationController');



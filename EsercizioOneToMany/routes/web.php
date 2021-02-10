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


Route::get('/employees', 'EmployeeController@index')
    -> name('employee-index');
Route::get('/employee/create', 'EmployeeController@create')
    -> name('employee-create');
Route::get('/employee/{id}', 'EmployeeController@show')
    -> name('employee-show');
Route::post('/employee/store', 'EmployeeController@store')
    -> name('employee-store');
Route::get('/employee/edit/{id}', 'EmployeeController@edit')
    -> name('employee-edit');
Route::post('/employee/update/{id}', 'EmployeeController@update')
    -> name('employee-update');
Route::get('/tasks', 'TaskController@index') 
    -> name('task-index');    
Route::get('/task/create', 'TaskController@create')
    -> name('task-create');
Route::post('/task/store', 'TaskController@store')
    -> name('task-store');
Route::get('/task/edit/{id}', 'TaskController@edit')
    -> name('task-edit');
Route::post('/task/update/{id}', 'TaskController@update')
    -> name('task-update');
Route::get('/task/{id}', 'TaskController@show')
    -> name('task-show');
Route::get('/typologies', 'TypologyController@index')
    -> name('typology-index');
Route::get('/typology/create', 'TypologyController@create')
    -> name('typology-create');
Route::get('/typology/{id}', 'TypologyController@show')
    -> name('typology-show');
Route::post('/typology/store', 'TypologyController@store')
    -> name('typology-store');
Route::get('/typology/edit/{id}', 'TypologyController@edit')
    -> name('typology-edit');
Route::post('/typology/update/{id}', 'TypologyController@update')
    -> name('typology-update');

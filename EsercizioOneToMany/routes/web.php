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
Route::get('/employee/{id}', 'EmployeeController@show')
    -> name('employee-show');
Route::get('/employee/create', 'EmployeeController@create')
    -> name('employee-create');
Route::get('/employee/store', 'EmployeeController@store')
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
Route::get('/typology/{id}', 'TypologyController@show')
    -> name('typology-show');

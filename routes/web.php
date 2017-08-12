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


Route::get('/lte-register', function () {
    return view('adminlte.auth.lte-register');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 * タスク機能
 */
Route::group(['prefix' => '/task'], function () {
    Route::get('/', 'TasksController@index');
    /** タスク追加 */
    Route::post('/', 'TasksController@add');
    /** タスク編集 */
    Route::post('edit/{task}', 'TasksController@edit');
    /** タスク削除 */
    Route::delete('/{task}', 'TasksController@delete');
});



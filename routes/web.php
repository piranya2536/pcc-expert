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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController@getLogin');
    Route::get('expert', 'AdminController@expertIndex');
    Route::get('expert/create', 'AdminController@expertCreate');
    Route::post('expert', 'AdminController@expertStore');
    Route::delete('expert', 'AdminController@expertDestroy');
    Route::get('project', 'AdminController@projectIndex');
    Route::get('project/create', 'AdminController@projectCreate');
    Route::post('project', 'Admincontroller@projectStore');

    Route::get('activity/create', 'AdminController@activityCreate');
    Route::post('activity', 'Admincontroller@activityStore');

    Route::get('project/{id}', 'AdminController@projectEdit');
    Route::put('project/{id}', 'AdminController@projectUpdate');
    Route::get('project/{id}/detail', 'AdminController@projectDetail');

    Route::get('user', 'Admincontroller@userIndex');
    Route::get('user/create', 'Admincontroller@userCreate');

    
});

Route::resource('admin', 'AdminController');
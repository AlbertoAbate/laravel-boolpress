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
// homepage
Route::get('/', 'HomeController@index')->name('home');

//ROTTE PUBLIC
Route::get('posts', 'PostController@index')->name('posts.index');

// rotte per login/registrazione
Auth::routes();


//rotte pagine per utenti loggati
//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function() {
        //home Admin
        Route::get('/', 'HomeController@index')->name('home');

        //rotte post CRUD
        Route::resource('posts', 'PostController');
    });

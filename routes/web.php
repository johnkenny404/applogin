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
//Route::get('/profile', 'ApploginController@profile')->middleware(['auth'])->name('dashboard');

Route::get('/dashboard','ApploginController@dashboard' )->middleware(['auth'])->name('dashboard');

Route::get('/form', 'ApploginController@form')->middleware('auth')->middleware(['auth'])->name('form');

Route::post('/create-profile', 'ApploginController@createprofile')->middleware(['auth'])->name('create.profile');

require __DIR__.'/auth.php';

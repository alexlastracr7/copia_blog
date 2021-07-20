<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|m
*/



Route::get('/', [\App\Http\Controllers\paginaController::class, 'execute'])->name('home');

Route::get('/about', [\App\Http\Controllers\paginaController::class, 'about'])->name('about');

Route::get('/destinations', [\App\Http\Controllers\paginaController::class, 'destinations'])->name('destinations');

Route::get('/contact', [\App\Http\Controllers\paginaController::class, 'contact'])->name('contact');



//Route::post('contact', 'MeassageController@atore');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
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

Route::get('/', [GeneralController::class,'start'])->name('start');

Route::get('/addarticle', [GeneralController::class,'add_article'])->name('add_article');

Route::post('/addarticle/action', [GeneralController::class,'add_article_action'])->name('add_article_action');

Route::get('/article/full/{id}',[GeneralController::class,'full'])->name('Full_text');

Route::get('/article/update/{id}',[GeneralController::class,'update'])->name('update');

Route::post('/article/update/{id}',[GeneralController::class,'sub_update'])->name('sub_update');

Route::get('/article/delete/{id}',[GeneralController::class,'delete'])->name('delete');

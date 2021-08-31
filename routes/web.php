<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SubsidiariesController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AController;


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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about',[AboutController::class,'index'])->name('about');
Route::get('subsidiaries/{slug}',[SubsidiariesController::class,'index'])->name('sub.data');
Route::get('subsidiaries/fume-kopi-indonesia',[SubsidiariesController::class,'fume'])->name('fume');
Route::get('career',[CareerController::class,'index'])->name('career');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact/form',[ContactController::class,'postForm']);
Route::get('sitemap',[AController::class,'index'])->name('sitemap');
Route::get('kebijakan-situs',[AController::class,'index'])->name('kebijakan-situs');
Route::get('syarat-pengguna',[AController::class,'index'])->name('syarat-pengguna');
Route::get('privasi',[AController::class,'index'])->name('privasi');





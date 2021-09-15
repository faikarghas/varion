<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SubsidiariesController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('proses_login',[AuthController::class,'proses_login']);
Route::post('proses_register',[AuthController::class,'proses_register']);

// AUTH
Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['check_auth:admin']],function(){
        Route::get('/admin',[AdminController::class,'index'])->name('home');

        Route::get('/admin/about',[AdminController::class,'about'])->name('adminabout');
        Route::get('/admin/about/{id}',[AdminController::class,'edit_about'])->name('editabout.data');
        Route::post('/post_about/{id}',[AdminController::class,'post_about'])->name('post_about.data');

        Route::get('/admin/contact',[AdminController::class,'contact'])->name('admin-contact');
        Route::get('/admin/contact-info',[AdminController::class,'edit_contact'])->name('editcontact');
        Route::post('/post_contact/{id}',[AdminController::class,'post_contact'])->name('post_contact.data');


        Route::get('/admin/subsidiaries',[AdminController::class,'subsidiaries'])->name('subsidiaries');
        Route::get('/admin/subsidiaries/{id}',[AdminController::class,'edit_subsidiaries'])->name('editsubsi.data');
        Route::post('/post_subsidiaries/{id}',[AdminController::class,'post_subsidiaries'])->name('post_subsidiaries.data');

        Route::get('/admin/career',[AdminController::class,'career'])->name('career');
        Route::get('/admin/create-career',[AdminController::class,'create_career'])->name('create-career');
        Route::post('/post_create_career',[AdminController::class,'post_create_career'])->name('post_create_career');
        
        Route::get('/admin/career/{id}',[AdminController::class,'edit_career'])->name('editcareer.data');
        Route::post('/post_edit_career/{id}',[AdminController::class,'post_edit_career'])->name('post_edit_career.data');
        
    });
});

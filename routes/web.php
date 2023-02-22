<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\ContactController; 

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

Route::get('/',function () {
    return redirect()->to('https://www.educastudio.com/');
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class,'item1']);
    
    Route::get('/marble-and-friends-kid-games', [CategoryController::class,'item2']);

    Route::get('/riri-story-books', [CategoryController::class,'item3']);

    Route::get('/kolak-kids-songs', [CategoryController::class,'item4']);
});

Route::get('/news',[NewsController::class,'news']);

Route::get('/news/{id}',[NewsController::class,'newsId']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class,'program1']);
    
    Route::get('/magang', [ProgramController::class,'program2']);

    Route::get('/kunjungan-industri', [ProgramController::class,'program3']);
});

Route::get('/about-us',[AboutController::class,'about']);

Route::get('/contact-us',[ContactController::class,'index']);

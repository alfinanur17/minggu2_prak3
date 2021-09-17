<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\ProdiController;


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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/', [HomeController::class.'index']);
Route::prefix('prodi')->group(function () {
    Route::get('/Manajemen_Informatika', [ProdiController::class,'mi']);
    Route::get('/Teknik_Informatika', [ProdiController::class,'ti']);
});
Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function(){
    Route::get('/kelas', [SaranaController::class,'kelas']);
    Route::get('/laboratorium', [SaranaController::class,'laboratorium']);
    Route::get('/lainnya', [SaranaController::class,'lainnya']);
    Route::get('/perkantoran', [SaranaController::class,'perkantoran']);
    });
    

Route::get('/about', [AboutController::class,'about']);

Route::get('/comment/{nama}/{pesan}', [CommentController::class,'comment']);
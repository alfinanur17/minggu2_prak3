<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;

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



Route::get('/', [HomeController::class.'index']);
Route::prefix('prodi')->group(function(){
    Route::get('/Manajemen_Informatika',function(){
        return "Manajemen Informatika";
    });
    Route::get('/Teknik_Informatika',function(){
        return "Teknik Informatika";
    });
});

Route::get('/berita/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function(){
    Route::get('/kantor',function(){
        return "Perkantoran";
    });
    Route::get('/labotarium',function(){
        return "Labotarium";
    });
    Route::get('/kelas',function(){
        return "Kelas";
    });
    Route::get('/lainnya',function(){
        return "Lainnya";
    });
});

Route::get('/about', [AboutController::class.'about']);

Route::get('/comment/{nama}/pesan/{pesan}', [CommentController::class.'comment']);
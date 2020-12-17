<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::view('/', 'homepage');
Route::get('/',[Homepage::class,'index'])->name('homepage');
Route::get('/yazilar/sayfa',[Homepage::class,'index']);
Route::get('/kategori/{category}',[Homepage::class,'category'])->name('category');
Route::get('/{category}/{slug}',[Homepage::class,'single'])->name('single');
//Route::get('/',[Homepage::class,'homepage'])->name('homepage');

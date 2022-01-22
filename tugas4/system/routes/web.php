<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\IndexController;

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

Route::get('template', function () {
    return view('template');
});

Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);

Route::get('admin/produk', [ProdukController::class, 'index']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukController::class, 'destroy']);


Route::get('login', [AuthController::class, 'showLogin']);
Route::get('register', [AuthController::class, 'register']);
Route::get('forgot', [AuthController::class, 'forgot']);



Route::get('index',  [IndexController::class, 'showindex']);
Route::get('about',  [IndexController::class, 'showabout']);

Route::get('contact',  [IndexController::class, 'showcontact']);
Route::get('product',  [IndexController::class, 'showproduct']);

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('product', function () {
    return view('product');
});

Route::get('index', function () {
    return view('index');
});

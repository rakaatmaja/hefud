<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/promo', [HomeController::class, 'index2'])->name('promo');
Route::get('/wishlist', [HomeController::class, 'index3'])->name('wishlist');
Route::get('/uts', [HomeController::class, 'index4'])->name('uts');
// Route::get('/admin', [ShopController::class, 'index'])->name('admin');
// Route::get('/admin/create', [ProdukController::class,'store'])->name('store');
// Route::post('/admin/simpan', [ShopController::class,'simpan']);
// Route::group(['middleware' => 'auth'], function () {
// Route::resource('admin', ProdukController::class);

Route::group(['middleware' => ['auth', 'guest']], function () {
    Route::resource('admin', ProdukController::class);
});

// API LOGIN
Route::post('/api/login', 'API\AuthController@login')->name('api.login');
Route::post('/api/register', 'API\AuthController@register')->name('api.register');
Route::get('/api/user', 'API\AuthController@getLoggedInUser');

// API PRODUK
Route::get('/api/produk', 'API\ProdukController@index');
Route::get('/api/kategori', 'API\ProdukController@kategori');

Route::get('/create', [ProdukController::class, 'create'])->name('backpage.create');

// Cart
// Route::post('/addtocart/{id}', [ProdukController::class, 'addToCartApi']);
// web.php atau routes.php
Route::post('/api/addtocart/{id}', 'API\ProdukController@addToCartAPI');
Route::get('/some-page', 'ProdukController@somePage');








// Route::post('/admin/store', [ProdukController::class, 'store'])->name('api.store');
// Route::put('/admin/update/{id}', [ProdukController::class, 'update'])->name('api.update');

Route::post('/admin/store', [ProdukController::class, 'store'])->name('api.store');
Route::get('/admin/edit/{id}', [ProdukController::class, 'edit'])->name('backpage.edit');
Route::put('/admin/update/{id}', [ProdukController::class, 'update'])->name('api.update');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

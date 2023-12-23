<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// //LOGIN REGISTER
// Route::post('login', [AuthController::class, 'login']);
// Route::post('register', [AuthController::class, 'register']);




// Route::post('/admin/store', [ProdukController::class, 'store']);
// Route::put('/admin/update/{id}', [ProdukController::class, 'update']);

Route::post('/admin/store', [ProdukController::class, 'store'])->name('api.store');
Route::get('/admin/edit/{id}', [ProdukController::class, 'edit'])->name('api.edit');
Route::put('/admin/update/{id}', [ProdukController::class, 'update'])->name('api.update');


// Route::group(['middleware' => ['web']], function () {
//     Route::post('/login', 'Auth\AuthController@showLoginForm')->name('login');
//     Route::post('/login', 'Auth\AuthController@login');
//     Route::post('/logout', 'Auth\AuthController@logout')->name('logout');
// });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'regis']);

Route::post('/kirim', [AuthController::class, 'kirim']);

Route::get('/table', [AuthController::class, 'table']);

Route::get('/data-tables', function(){
    return view('halaman.data-tables');
});

// CRUD
// Creat
// Form create data
Route::get('/cast/create', [CastController::class, 'create']);
// Kirim data ke database
Route::post('/cast', [CastController::class, 'store']);


// read
Route::get('/cast', [CastController::class, 'index']);
// Menampilkan detail data berdasar id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

// Form update data
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
// Update data ke database berdasar id
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

// Delete
Route::DELETE('/cast/{cast_id}', [CastController::class, 'destroy']);
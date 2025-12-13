<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

// Produk Routes
Route::post('/produk/create', [ProdukController::class, 'store']);
Route::get('/produk/read', [ProdukController::class, 'index']);
Route::get('/produk/read/{id}', [ProdukController::class, 'show']);
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy']);

// Kategori Routes
Route::post('/kategori/create', [KategoriController::class, 'store']);
Route::get('/kategori/read', [KategoriController::class, 'index']);
Route::get('/kategori/read/{id}', [KategoriController::class, 'show']);
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

// Pelanggan Routes
Route::post('/pelanggan/create', [PelangganController::class, 'store']);
Route::get('/pelanggan/read', [PelangganController::class, 'index']);
Route::get('/pelanggan/read/{id}', [PelangganController::class, 'show']);
Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update']);
Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

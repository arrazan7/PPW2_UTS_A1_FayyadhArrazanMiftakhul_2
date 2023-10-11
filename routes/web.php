<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;

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

Route::get('/', function () {return view('welcome');});

Route::get('/website_pemain', [Product::class,'index']);

//Create
Route::get('/website_minimarket/create', [Product::class,'create'])->name('membuat_data');

//Store Create
Route::post('/website_pemain', [Product::class,'store'])->name('menyimpan_data');

//Update
Route::get('/website_minimarket/edit/{idsss}', [Product::class, 'edit'])->name('mengedit_data');

//Store Update
Route::post('/website_minimarket/update/{id}', [Product::class, 'update'])->name('mengupdate_data');

//Delete
Route::post('/website_minimarket/delete/{id}', [Product::class,'destroy'])->name('menghapus_data');
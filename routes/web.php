<?php

use App\Http\Controllers\GestionController;
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
// })->name('welcome');


Route::get('/', [GestionController::class, 'loginform'])->name('login')->middleware('guest');
Route::post('/loginstore', [GestionController::class, 'loginstore'])->name('loginstore')->middleware('guest');
Route::get('/logout', [GestionController::class, 'logout'])->name('logout')->middleware('auth');



Route::get('/index', [GestionController::class, 'index'])->name('index')->middleware('auth');
Route::get('/create', [GestionController::class, 'create'])->name('create')->middleware('auth');
Route::post('/store', [GestionController::class, 'store'])->name('store')->middleware('auth');
Route::post('/edit', [GestionController::class, 'edit'])->name('edit')->middleware('auth');
Route::get('/show/{produit}', [GestionController::class, 'show'])->name('show')->middleware('auth');
Route::get('/{produit}/edit', [GestionController::class,"edit"])->name('edit')->middleware('auth');
Route::put('/{produit}', [GestionController::class,"update"])->name('update')->middleware('auth');
Route::delete('/destroy/{produit}', [GestionController::class, 'destroy'])->name('product.destroy')->middleware('auth');

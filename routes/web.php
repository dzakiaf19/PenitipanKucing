<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KucingController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/indexKucing', [KucingController::class, 'index']);
    Route::get('/addKucing', [KucingController::class, 'create'])->name('addKucing');
    Route::get('/editKucing/{id}', [KucingController::class, 'edit'])->name('editKucing');
    Route::post('/updateKucing/{id}', [KucingController::class, 'update'])->name('update');
    Route::post('/addKucing', [KucingController::class, 'store'])->name('store');
    Route::get('/deleteKucing/{id}', [KucingController::class, 'destroy'])->name('delete');
});

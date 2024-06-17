<?php

use App\Http\Controllers\PelangganController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download-pdf', [PelangganController::class, 'downloadpdf'])->name('download.pdf');
Route::get('/view-pdf', [PelangganController::class, 'viewpdf'])->name('view.pdf');

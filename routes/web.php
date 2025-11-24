<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/certificate', [PdfController::class, 'index']);
Route::get('/print', [PdfController::class, 'printPdf'])->name('print.pdf');

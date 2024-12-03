<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportController;

Route::get('/', [ReportController::class, 'index'])->name('formulario_report');

Route::post('/generate-report', [ReportController::class, 'generateReport'])->name('generate_report');


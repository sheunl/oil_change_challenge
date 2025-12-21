<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChangeController;

Route::get('/', [OilChangeController::class, 'index'])
    ->name('oil-change.index');

Route::post('/calculate', [OilChangeController::class, 'calculate'])
    ->name('oil-change.calculate');

Route::get('/results/{id}', [OilChangeController::class, 'results'])
    ->name('oil-change.results');
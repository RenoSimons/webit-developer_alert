<?php

use Illuminate\Support\Facades\Route;
use JohnDoe\BlogPackage\Http\Controllers\AlertController;


Route::get('/developer-alert/alert/settings/{id}', [AlertController::class, 'index'])->name('alert.snooze');
Route::post('/developer-alert/alert/settings/{id}', [AlertController::class, 'update'])->name('alert.update');

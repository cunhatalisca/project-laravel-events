<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SiteController;

Route::resource('events', EventController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/evento/{id}', [SiteController::class, 'details'])->name('site.details');  
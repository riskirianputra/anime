<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AbjadController;
use App\Http\Controllers\TypeController;

Route::get('/genre', [GenreController::class, 'index']);
Route::get('/abjad', [AbjadController::class, 'index']);
Route::get('/type', [TypeController::class, 'index']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;//追記

use Illuminate\Support\Facades\Route;//上部に追記

use App\Http\Controllers\SessionController;

Route::prefix('book')->group(function () {//以下を追記
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);

});

Route::get('/relation', [AuthorController::class, 'relate']);
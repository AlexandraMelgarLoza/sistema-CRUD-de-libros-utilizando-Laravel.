<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use TCG\Voyager\Facades\Voyager;

Route::resource('books', BookController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Voyager::routes();
});
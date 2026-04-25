<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanDetailController;
use App\Http\Controllers\ReturnController;

Route::resource('users', UserController::class);
Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);
Route::resource('bookshelfs', BookshelfController::class);
Route::resource('loans', LoanController::class);
Route::resource('loan-details', LoanDetailController::class);
Route::resource('returns', ReturnController::class);
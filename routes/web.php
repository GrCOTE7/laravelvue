<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Book\BooksListController;
use App\Http\Controllers\User\UsersListController;

Route::get('/', UsersListController::class)
->name('users.list');
Route::get('b', BooksListController::class)->name('books.list');
Route::get('t', TestController::class)->name('test.test');

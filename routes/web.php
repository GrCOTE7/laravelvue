<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UsersListController;

Route::get('/', UsersListController::class)->name('users.list');

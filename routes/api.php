<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\IndexController;

Route::get('users', IndexController::class)->name('index');

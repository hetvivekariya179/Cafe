<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReViewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurMenuController;
use App\Http\Controllers\AboutController;   

Route::get('/', [HomeController::class, 'index']);
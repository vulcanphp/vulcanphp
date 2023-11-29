<?php

use App\Http\Controllers\Home;
use VulcanPhp\PhpRouter\Route;

Route::get('/', [Home::class, 'index']);

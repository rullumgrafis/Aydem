<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

Route::get('/', [RoutingController::class, 'index'])->name('root');

Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])
    ->where('first', '^(?!images|build).*$');

Route::get('{any}', [RoutingController::class, 'root'])
    ->where('any', '^(?!images|build).*$');
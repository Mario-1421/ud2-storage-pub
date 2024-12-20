<?php

use App\Http\Controllers\CsvController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\JsonController;

Route::apiResource('hello', HelloWorldController::class);

Route::apiResource('json', JsonController::class);

Route::apiResource('csv', CsvController::class);
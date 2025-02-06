<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Models\Listing;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index']);
Route::get('hello',[IndexController::class, 'show']);

Route::resource('listing', ListingController::class)
->only(['index', 'show', 'create', 'store']);



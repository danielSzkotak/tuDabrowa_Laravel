<?php

use Illuminate\Support\Facades\Route;

Route::get('/ads', function () {
   return response()->json([
      ['id' => 1, 'title' => 'Pierwsze ogłoszenie'],
      ['id' => 2, 'title' => 'Drugie ogłoszenie']
   ]);
});

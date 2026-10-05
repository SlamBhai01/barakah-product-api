<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Barakah Product REST API is running.',
        'api_endpoint' => url('/api/products'),
    ]);
})->name('home');

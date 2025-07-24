<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Http\Request;
Route::get('/api/hello', function (Request $request) {
    return response()->json(['message' => 'Hello from Laravel API!']);
});

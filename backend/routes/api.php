<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function (Request $request) {
    return response()->json(['message' => 'Hello from Laravel API!']);
});

Route::post('/test', function (Request $request) {
    return response()->json(['message' => 'POST request successful!', 'data' => $request->all()]);
});
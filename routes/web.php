<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/healthz', function () {
    return response()->json(['status' => 'ok']);
})->name('healthz');

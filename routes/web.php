<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produk;

Route::get('/', function () {
    $produks = Produk::latest()->get();
    return view('home', compact('produks'));
});


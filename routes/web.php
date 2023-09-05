<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('about',[
        "name"  => "nauval",
        "email"  => "nauval@gmail.com",
        "umur"  => "19 tahun",
        "alamat" => "Kulon Progo",
        "sekolah" => "Gadjah Mada"
    ]);
});

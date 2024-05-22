<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\prodicontroller; 

Route::get('/', function () {
    $data = ['nama' => "Nadia", 'foto' =>'E020322106.jpg'];
    return view('dashboard', compact('data'));
 });

 // Route::get('/mahasiswa', function () {
 //   return view('mahasiswa', ['nama' => "Nadia Khairiya", 'foto' =>'E020322106.jpg']);
 //});

 //Route::get('/prodi', function () {
 //   return view('prodi', ['nama' => "Nadia Khairiya", 'foto' =>'E020322106.jpg']);
 // });

Route:: get('/mahasiswa', [mahasiswacontroller::class, 'index']);
Route:: get('/prodi', [prodicontroller::class, 'index']);
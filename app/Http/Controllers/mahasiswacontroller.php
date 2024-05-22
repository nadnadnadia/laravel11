<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class mahasiswacontroller extends Controller

{
    public function index()
    {
        $data = ['nama' => "Nadia", 'foto' =>'E020322106.jpg'];
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa', compact('data', 'mahasiswa'));
        }
    }
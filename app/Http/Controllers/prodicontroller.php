<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class prodicontroller extends Controller

{
    public function index()
    {
    $data = ['nama' => "Nadia", 'foto' =>'E020322106.jpg'];
    $prodi = DB::table('prodi')->get();
    return view('prodi', compact('data', 'prodi'));
    }
}
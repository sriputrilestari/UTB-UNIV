<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $artikels = Artikels::all();
        $dosen = Dosen::all();
        $fakultas = Fakultas::all();
        $fasilitas = Fasilitas::all();
        $prestasi = Prestasi::all();
        $ukm = Ukm::all();
        return view('welcome', compact('artikels','dosen','fakultas','fasilitas','prestasi','ukm'));
    }
}

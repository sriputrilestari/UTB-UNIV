<?php

namespace App\Http\Controllers;
use App\Models\Artikels;
use App\Models\Dosen;
use App\Models\Prestasi;
use App\Models\Fasilitas;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $artikels = Artikels::all();
        return view('welcome', compact('artikels'));
    }
    public function artikels(){
        $artikels = Artikels::all();
        return view('artikels2', compact('artikels'));
    }
    public function detailartikels($id){
        $data = Artikels::FindOrFail($id);
        return view('detail_artikel', compact('data'));
    }
    public function dosen(){
        $dosen = Dosen::all();
        return view('dosen2', compact('dosen'));
    }
    public function prestasi(){
        $prestasi = Prestasi::all();
        return view('prestasi2', compact('prestasi'));
    }
    public function detailprestasi($id){
        $data = Prestasi::FindOrFail($id);
        return view('detail_prestasi', compact('data'));
    }
    public function fasilitas(){
        $fasilitas = Fasilitas::all();
        return view('fasilitas2', compact('fasilitas'));
    }
   
}

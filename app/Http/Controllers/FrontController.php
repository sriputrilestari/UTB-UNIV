<?php

namespace App\Http\Controllers;
use App\Models\Artikels;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $artikels = Artikels::all();
        return view('welcome', compact('artikels'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.create', compact('fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasilitas = new Fasilitas;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if($request->hasFile('foto')){
        $img = $request->File('foto');
        $name = rand(1000,9999) . $img->getClientOriginalName();
        $img->move('storage/fasilitas', $name);
        $fasilitas->foto = $name;

        }
        $fasilitas->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
       return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if($request->hasFile('foto')){
        $img = $request->File('foto');
        $name = rand(1000,9999) . $img->getClientOriginalName();
        $img->move('storage/fasilitas', $name);
        $fasilitas->foto = $name;

        }
        $fasilitas->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
       return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = fasilitas::findOrFail($id);

        //hapus gambar yang lama jika ada
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('success','data berhasil dihapus');
    }
}

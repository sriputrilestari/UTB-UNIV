<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikels;
use Storage;

class ArtikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikels::all();
        return view('artikels.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikels = Artikels::all();
        return view('artikels.create', compact('artikels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validated = $request->validate([
            'judul' => 'required|unique:artikels',
            'isi'   => 'required',
            'foto'  => 'required|image|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $artikels = new Artikels;
        $artikels->judul = $request->judul;
        $artikels->isi = $request->isi;

        if($request->hasFile('foto')){
        $img = $request->File('foto');
        $name = rand(1000,9999) . $img->getClientOriginalName();
        $img->move('storage/artikels', $name);
        $artikels->foto = $name;

        }
        $artikels->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
       return redirect()->route('artikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('artikels.show', compact('artikels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('artikels.edit', compact('artikels'));
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

        $validated = $request->validate([
            'judul' => 'required',
            'isi'   => 'required',
            'foto'  => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999', // ← Changed here
        ]);
        
        $artikels = Artikels::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->isi = $request->isi;
        
        if ($request->hasFile('foto')) {
            // Delete old photo if it exists
            if ($artikels->foto && Storage::exists('public/artikels/' . $artikels->foto)) {
                Storage::delete('public/artikels/' . $artikels->foto);
            }
        
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->storeAs('public/artikels', $name);
            $artikels->foto = $name;
        }
        
        $artikels->save();
        
        session()->flash('success', 'Data Berhasil Diperbarui');
        return redirect()->route('artikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $artikels = Artikels::findOrFail($id);

        //hapus gambar yang lama jika ada
        $artikels->delete();
        return redirect()->route('artikels.index')->with('success','data berhasil dihapus');
    }
}

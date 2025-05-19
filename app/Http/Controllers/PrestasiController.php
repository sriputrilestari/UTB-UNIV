<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.create', compact('prestasi'));
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
            'nama_prestasi' => 'required|unique:prestasis',
            'deskripsi' => 'required',
            'jenis' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $prestasi = new Prestasi();
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->deskripsi = $request->deskripsi;
        $prestasi->jenis = $request->jenis;

        if ($request->hasFile('foto')) {
            $img = $request->File('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }
        $prestasi->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
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
            'nama_prestasi' => 'required',
            'deskripsi' => 'required',
            'jenis' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $prestasi = new Prestasi();
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->deskripsi = $request->deskripsi;
        $prestasi->jenis = $request->jenis;

        if ($request->hasFile('foto')) {
            // Delete old photo if it exists
            if ($prestasi->foto && Storage::exists('public/prestasi/' . $prestasi->foto)) {
                Storage::delete('public/prestasi/' . $dosen->foto);
            }

            $img = $request->File('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }
        $prestasi->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = prestasi::findOrFail($id);

        //hapus gambar yang lama jika ada
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('success', 'data berhasil dihapus');
    }
}

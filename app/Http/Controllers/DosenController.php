<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Storage;


class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('dosen.create', compact('dosen'));
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
            'nama_dosen' => 'required|unique:dosens',
            'telepon'    => 'required|numeric',
            'email'      => 'required',
            'jabatan'    => 'required',
            'status'     => 'required',
            'foto'       => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);


        $dosen = new Dosen();
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->telepon = $request->telepon;
        $dosen->email = $request->email;
        $dosen->jabatan = $request->jabatan;
        $dosen->status = $request->status;

        if ($request->hasFile('foto')) {
            $img = $request->File('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/dosen', $name);
            $dosen->foto = $name;
        }
        $dosen->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
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
            'nama_dosen' => 'required',
            'telepon'    => 'required',
            'email'      => 'required',
            'jabatan'    => 'required',
            'status'     => 'required',
            'foto'       => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->telepon = $request->telepon;
        $dosen->email = $request->email;
        $dosen->jabatan = $request->jabatan;
        $dosen->status = $request->status;

        if ($request->hasFile('foto')) {
            // Delete old photo if it exists
            if ($dosen->foto && Storage::exists('public/dosen/' . $dosen->foto)) {
                Storage::delete('public/dosen/' . $dosen->foto);
            }
            
            $img = $request->File('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->storeAs('storage/dosen', $name);
            $dosen->foto = $name;
        }
        $dosen->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);

        //hapus gambar yang lama jika ada
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success','data berhasil dihapus');
    }
}

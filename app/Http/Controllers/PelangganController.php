<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggan::all();
        return view('Pelanggan.Pelanggan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pelanggan.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',

        ]);

        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect('/Pelanggan')->with('success', 'Berhasil Menambahkan data baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan, $id)
    {
        $data = Pelanggan::where('id', '=', $id)->first();
        return view('Pelanggan.update', compact(('data')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggan $pelanggan, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',

        ]);

        Pelanggan::where('id', '=', $id)->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect('/Pelanggan')->with('success', 'Berhasil Menambahkan data baru!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan, $id)
    {
        $td = Pelanggan::where('id', '=',$id)->first();
        $td->delete();
         
        return redirect('/Pelanggan')->with('success', 'Berhasil Menghapus data');
    }
}

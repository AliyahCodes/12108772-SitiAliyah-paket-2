<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('Produk.Produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produk.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',

        ]);

        $newName = '';
        if($request->file('cover')){
            $extension = $request->file('cover')->getClientOriginalExtension();
            $newName = $request->nama_produk.'-'.now()->timestamp.'.'.$extension;
            $request->file('cover')->storeAs('image', $newName);
        }
        $request['image'] = $newName;

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga'=> $request->harga,
            'stok' => $request->stok,
            'image'=> $newName,
        ]);

        return redirect('/Produk')->with('success', 'Berhasil Menambahkan data baru!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk, $id)
    {
        $data = Produk::where('id', '=', $id)->first();
        return view('Produk.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk, $id)
    {
        // dd($request->all());
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);

        $newName = '';
        if($request->file('cover')){
            $extension = $request->file('cover')->getClientOriginalExtension();
            $newName = $request->nama_produk.'-'.now()->timestamp.'.'.$extension;
            $request->file('cover')->storeAs('image', $newName);
            $request['image'] = $newName;
        }

        Produk::where('id','-', $id)->update([
            'nama_produk' => $request->nama_produk,
            'harga'=> $request->harga,
            'image'=> $newName,
        ]);

        return redirect('/Produk')->with('success', 'Berhasil Menambahkan data baru!');
    
    }

    public function edit_stok($id)
    {
        $data = Produk::where('id', '=', $id)->first();
        return view('Produk.update-stok', compact('data'));
    }

    public function update_stok(Request $request, $id)
    {
        $request->validate([
            'stok' => 'required',
        ]);

        Produk::where('id', '=', $id)->update([
            'stok' => $request->stok,
        ]);

        return redirect('/Produk')->with('success', 'Berhasil Menambahkan data baru!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk, $id)
    {
        $td = Produk::where('id', '=', $id)->first();
        $td->delete();
         
        return redirect('/Produk')->with('success', 'Berhasil Menghapus data');
    
    }
}

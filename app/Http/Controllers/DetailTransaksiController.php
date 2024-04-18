<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk_id = $request->produk_id;
        $transaksi_id = $request->transaksi_id;
        $pelanggan_id = $request->pelanggan_id;

        $td = DetailTransaksi::whereProdukId($produk_id)->whereTransaksiId($transaksi_id)->first();

        $pelanggan = Pelanggan::find($pelanggan_id);
        $transaksi = Transaksi::find($transaksi_id);
        $produk = Produk::find($produk_id);

        if($td == null){
        $data = [
            'produk_id' => $produk_id,
            'produk_name' => $request->produk_name,
            'transaksi_id' => $transaksi_id,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal
        ];  
             DetailTransaksi::create($data);

            $dt = [
                'total_harga' => $request->qty + $transaksi->total_harga,
            ];
            $transaksi->update($dt);

            if ($pelanggan) {
                $transaksi->pelanggan_id = $pelanggan->id;
                $transaksi->save();
            }

            $stok = [
                'stok' => $produk->stok - $request->qty
            ];
            $produk->update($stok);

        }else {
            $data = [
                'qty' => $request->qty + $td->qty,
                'subtotal' => $request->subtotal + $td->subtotal
            ];
            $td->update($data);

            $dt = [
                'total_harga' => $request->qty + $transaksi->total_harga,
            ];
            $transaksi->update($dt);
        }
        return redirect('/Transaksi/' . $transaksi->id. '/edit');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailTransaksi $detailTransaksi)
    {
        //
    }

    public function print($id)
    {
        $detail = DetailTransaksi::whereTransaksiId($id)->get();
        return view('Transaksi.PrintTransaksi');

    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::with(['pelanggan', 'user'])->get();
        return view('Transaksi.Transaksi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'pelanggan_id' => 0,
            'tanggal_penjualan'=> Carbon::now()->toDateString(),
            'total_harga' => 0,
        ];

        $transaksi = Transaksi::create($data);
        return redirect('/Transaksi/'.$transaksi->id.'/edit');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi, $id)
    {
        $produk = Produk::get();
        $pelanggan = Pelanggan::get();

        $detail = DetailTransaksi::whereTransaksiId($id)->get();

        $produk_id = $request['produk_id'];
        $p_detail = Produk::find($produk_id);

        $pelanggan_id = $request['pelanggan_id'];
        $pl = Pelanggan::find($pelanggan_id);

        $act = request('act');
        $qty =request('qty');
            if($qty == 'min'){
                if($qty <= 1){
                    $qty = 1;
                }else {
                    $qty = $qty - 1;
                }
            }else {

                $qty = $qty + 1;
            }

            $subtotal = 0;
                if($p_detail) {
                    $subtotal = $qty * $p_detail->harga;
                }

        return view('Transaksi.Create', compact('produk', 'p_detail','pelanggan','pl', 'qty', 'subtotal', 'detail'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}

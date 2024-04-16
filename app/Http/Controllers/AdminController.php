<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('Dashboard.Admin');
    }

    public function produk()
    {
        return view('Produk.Produk');
    }

    public function create()
    {
        return view('Produk.Create');
    }

    public function edit()
    {
        return view('Produk.update');
    }




    public function transaksi()
    {
        return view('Transaksi.Transaksi');
    }

    public function create_transaksi()
    {
        return view('Transaksi.Create');
    }

    public function post()
    {
        return view('Transaksi.Transaksipost');
    }

    public function edit_transaksi()
    {
        return view('Transaksi.update');
    }

    public function detail_transaksi()
    {
        return view('Transaksi.DetailTransaksi');
    }

    public function print_transaksi()
    {
        return view('Transaksi.PrintTransaksi');
    }

    



    public function user()
    {
        return view('User.User');
    }

    public function create_user()
    {
        return view('User.Create');
    }

    public function edit_user()
    {
        return view('User.update');
    }
}

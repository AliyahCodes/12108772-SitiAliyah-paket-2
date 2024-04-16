@extends('layouts.main')

@section('title', 'Data Transaksi')

@section('text', 'Data Transaksi')
    
@section('content')

<div class="card">
    <div class="card-header">
      <h4>Transaksi</h4>
      <div class="card-header-action">
        <a href="/transaksi/create" class="btn btn-danger">Tambah Data <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive table-invoice">
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal Penjualan</th>
            <th>Total Harga</th>
            <th>Dibuat Oleh</th>
            <th style="text-align: center">Action</th>
          </tr>

          <tr>
            <td><a href="#">INV-87320</a></td>
            <td>jj</td>
            <td>h</td>
            <td>July 28, 2018</td>
            <td>Aliyah</td>
            <td>
                {{-- hapus untuk user saja --}}
              <a href="#" class="btn btn-danger">Hapus</a>
              <a href="/transaksi/detail" class="btn btn-primary">Detail</a>
              <a href="/transaksi/print" target="_blank" class="btn btn-warning">Unduh</a>

            </td>
          </tr>
        </table>
      </div>
    </div>


@endsection
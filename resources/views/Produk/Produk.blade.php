@extends('layouts.main')

@section('title', 'Data Produk')

@section('text', 'Data Produk')
    

@section('content')

<div class="card">
    <div class="card-header">
      <h4>Produk</h4>
      <div class="card-header-action">
        <a href="/Produk/create" class="btn btn-danger">Tambah Data <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive table-invoice">
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>image</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Stok</th>
            <th>Action</th>
          </tr>

          <tr>
            <td><a href="#">INV-87320</a></td>
            <td class="font-weight-600">Ardian Rahardiansyah</td>
            <td>jj</td>
            <td>h</td>
            <td>July 28, 2018</td>
            <td>
              <a href="/produk/edit" class="btn btn-primary">Edit</a>
              <a href="" class="btn btn-warning">Edit stok</a>
              <a href="" class="btn btn-danger">Hapus</a>

            </td>
          </tr>
        </table>
      </div>
    </div>

@endsection
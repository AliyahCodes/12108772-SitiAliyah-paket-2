@extends('layouts.main')

@section('title', 'Data Pelanggan')

@section('text', 'Data Pelanggan')
    

@section('content')

<div class="card">
    <div class="card-header">
      <h4>Pelanggan</h4>
      <div class="card-header-action">
        <a href="/Pelanggan/create" class="btn btn-danger">Tambah Data <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive table-invoice">
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
          </tr>

          <tr>
            <td><a href="#">INV-87320</a></td>
            <td>jj</td>
            <td>h</td>
            <td>July 28, 2018</td>
            <td>
              <a href="/Pelanggan/edit" class="btn btn-primary">Edit</a>
              <a href="" class="btn btn-danger">Hapus</a>

            </td>
          </tr>
        </table>
      </div>
    </div>


@endsection
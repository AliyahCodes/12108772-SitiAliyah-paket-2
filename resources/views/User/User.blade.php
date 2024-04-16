@extends('layouts.main')

@section('title', 'Data Petugas')

@section('text', 'Data Petugas')
    

@section('content')

<div class="card">
    <div class="card-header">
      <h4>User</h4>
      <div class="card-header-action">
        <a href="/User/create" class="btn btn-danger">Tambah Data <i class="fas fa-chevron-right"></i></a>
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
              <a href="/User/edit" class="btn btn-primary">Edit</a>
              <a href="" class="btn btn-danger">Hapus</a>

            </td>
          </tr>
        </table>
      </div>
    </div>


@endsection
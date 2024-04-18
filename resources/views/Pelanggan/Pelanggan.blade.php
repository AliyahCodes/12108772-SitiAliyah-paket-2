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
            <th>alamat</th>
            <th>Telepon</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama_pelanggan}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->telepon}}</td>
            <td>
              <a href="/Pelanggan/edit/{{$item->id}}" class="btn btn-primary mt-2">Edit</a>
              <form action="/Pelanggan/delete/{{$item->id}}" method="post">
                @method('DELETE')
                @csrf
                <div class="delete">
                  <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                </div>

            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>


@endsection
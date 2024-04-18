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

          @foreach ($data as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>
              <img alt="image" src="{{asset('storage/image/'.$item->image)}}" width="75px">
            </td>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->stok}}</td>
            <td>
              <a href="/Produk/edit/{{$item->id}}" class="btn btn-primary mt-2">Edit</a>
              <a href="/Produk/stok/{{$item->id}}" class="btn btn-warning mt-2">Edit stok</a>
              <form action="/Produk/delete/{{$item->id}}" method="post">
                @method('DELETE')
                @csrf
                <div class="delete">
                  <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                </div>
            </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>

@endsection
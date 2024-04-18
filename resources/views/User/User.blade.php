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

          @foreach ($data as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role}}</td>
            <td>
              <a href="/User/edit/{{$item->id}}" class="btn btn-primary mt-2">Edit</a>

            <form action="/User/delete/{{$item->id}}" method="post">
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
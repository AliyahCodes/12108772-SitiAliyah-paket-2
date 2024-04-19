@extends('layouts.main')

@section('title', 'Data Transaksi')

@section('text', 'Data Transaksi')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Transaksi</h4>
            <div class="card-header-action">
                <a href="/transaksi/create" class="btn btn-danger">Tambah Data <i class="fas fa-chevron-right"></i></a>
                {{-- <form action="" method="GET">
          <select name="kategori">
              <option value="">Semua Kategori</option>
              @foreach ($kategori as $kat)
                  <option value=""></option>
              @endforeach
          </select>
        
          <button type="submit">Filter</button>
      </form> --}}
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

                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pelanggan->nama_pelanggan }}</td>
                            <td>{{ $item->tanggal_penjualan }}</td>
                            @foreach ($dt as $item)
                                <td>{{ $item->subtotal }}</td>
                            @endforeach
                            @foreach ($user as $item)
                                <td>{{ $item->name }}</td>
                            @endforeach

                            <td>
                                {{-- hapus untuk user saja --}}
                                <form action="/Transaksi/delet/{{ $item->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="delete">
                                        <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                                    </div>
                                </form>
                                <a href="/transaksi/detail/{{$item->id}}" class="btn btn-primary mt-2">Detail</a>
                                <a href="/transaksi/print/{{$item->id}}" target="_blank" class="btn btn-warning mt-2">Unduh</a>

                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>


    @endsection

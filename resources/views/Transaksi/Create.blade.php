@extends('layouts.main')

@section('title', 'Transaksi')
@section('text', 'Tambah data transaksi')


@section('content')

    <div class="row p-2">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <form method="GET">
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="">ID Produk</label>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex">
                                    <select name="produk_id" class="form-control" id="produk_id">
                                        <option value="">--{{isset($p_detail) ? $p_detail->nama_produk : ''}}--</option>
                                        @foreach ($produk as $item)
                                            <option value="{{$item->id}}">{{$item->id}}.{{$item->nama_produk}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="">ID Pelanggan</label>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex">
                                    <select name="pelanggan_id" class="form-control" id="pelanggan_id">
                                        <option value="">--{{isset($pl) ? $pl->nama_pelanggan : ''}}--</option>
                                        @foreach ($pelanggan as $item)
                                           <option value="{{$item->id}}">{{$item->id}}.{{$item->nama_pelanggan}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary ml-2">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    

                    <form action="/transaksi/detail/create" method="post">
                        @csrf
                        <input type="hidden" name="transaksi_id" value="{{Request::segment(2)}}">
                        <input type="hidden" name="produk_id" value="{{isset($p_detail) ? $p_detail->id : ''  }}">
                        <input type="hidden" name="produk_name" value="{{isset($p_detail) ? $p_detail->nama_produk : '' }}">
                        <input type="hidden" name="pelanggan_id" value="{{isset($pl) ? $pl->id : ''  }}">
                        <input type="hidden" name="subtotal" value="{{$subtotal}}">
                        


                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Nama Produk</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{isset($p_detail) ? $p_detail->nama_produk : ''}}" disabled class="form-control" name="nama_produk" id="">
                        </div>
                    </div>



                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Stok</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{isset($p_detail) ? $p_detail->stok: ''}}" disabled class="form-control" name="stok" id="">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{isset($p_detail) ? $p_detail->harga: ''}}" disabled class="form-control" name="harga" id="">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Jumlah</label>
                        </div>

                        <div class="col-md-8">
                            <div class="d-flex">
                                <a href="?produk_id={{ request('produk_id') }}&act=min&qty={{ $qty }}" class="btn btn-primary"><i class="fas fa-minus"></i></a>
                                <input type="number" value="{{$qty}}" id="qty" class="form-control" name="qty">
                                <a href="?produk_id={{ request('produk_id') }}&act=plus&qty={{ $qty }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <h5>Subtotal: Rp. {{$subtotal}} </h5>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <a href="/Transaksi" class="btn btn-info"><i class="fas fa-arrow-left"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>jumlah</th>
                            <th>subtotal</th>
                            <th>action</th>
                        </tr>
                        @foreach ($detail_transaksi as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->produk_name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->subtotal}}</td>
                            <td>
                                <form action="/transaksi/delete/{{$item->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="delete">
                                      <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                                    </div>
                                </form>                            </td>
                        </tr>
                        @endforeach

                        <hr>
                    </table>

                    <a href="/transaksi/print/{{$item->id}}" class="btn btn-info"><i class="fas fa-arrow-right"></i>selesai</a>

                </div>
            </div>
        </div>

        {{-- <div class="row mt-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="crad-body">

                        <form action="" method="get">
                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input type="number" value="{{format_rupiah( $penjualan->TotalHarga)}}" disabled name="TotalHarga" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Dibayarkan</label>
                            <input type="number" name="dibayarkan" value="{{request('dibayarkan')}}" class="form-control">
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                    </form>

                    <hr>
                        <div class="form-group">
                            <label for="">Uang Kembalian</label>
                            <input type="number" name="kembalian" value="{{format_rupiah($kembalian)}}" class="form-control" disabled>
                        </div>

                    </div>
                </div>
            </div> --}}
        </div>

    </div>




@endsection

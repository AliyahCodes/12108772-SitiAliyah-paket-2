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
                                        <option value="">----</option>
                                            <option value=""></option>
                                        
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
                                        <option value="">----</option>
                                            <option value=""></option>
                                    </select>
                                    <button type="submit" class="btn btn-primary ml-2">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    

                    <form action="" method="post">
                        @csrf
                        <input type="hidden" name="penjualan_id" value="">
                        <input type="hidden" name="produk_id" value="">
                        <input type="hidden" name="produk_name" value="">
                        <input type="hidden" name="subtotal" value="">
                        <input type="hidden" name="pelanggan_id" value="">

                        


                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Nama Produk</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="" disabled class="form-control" name="" id="">
                        </div>
                    </div>



                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Stok</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="" disabled class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="" disabled class="form-control" name="harga" id="">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="">Jumlah</label>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex">
                                <a href="" class="btn btn-primary"><i class="fas fa-minus"></i></a>
                                <input type="number" value="" id="qty" class="form-control" name="qty">
                                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <h5>Subtotal: Rp. </h5>
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
                        <tr>
                            <td>Laptop</td>
                            <td>12000</td>
                            <td>2</td>
                            <td>14000</td>
                            <td>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>

                        <hr>
                    </table>

                    <a href="" class="btn btn-info"><i class="fas fa-arrow-right"></i>selanjutnya</a>

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

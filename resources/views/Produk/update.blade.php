@extends('layouts.main')

@section('title', 'Data Produk')

@section('text', 'Edit data stok')
    

@section('content')


<section class="section">
    <div class="section-body">
      <h2 class="section-title">Edit data stok</h2>
      <p class="section-lead">
        Di halaman ini Anda dapat melakukan update data stok    </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">
                  @method('PATCH')
                  @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Produk</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="nama_produk" value="{{$data->nama_produk}}"  class="form-control">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                <div class="col-sm-12 col-md-7">
                    <input type="file" name="cover" id="image-upload" />
                  </div>
              </div>
           
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="harga" value="{{$data->harga}}"  class="form-control inputtags">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="stok" disabled value="{{$data->stok}}" class="form-control">
                </div>
              </div>

          
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="/Produk" class="btn btn-primary">Kembali</a>
                </div>
              </div>

            </form>

         
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
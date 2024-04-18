@extends('layouts.main')

@section('title', 'Create Pelanggan')

@section('text', 'Tambah data Pelanggan')
    

@section('content')

<section class="section">
    <div class="section-body">
      <h2 class="section-title">Tambah Pelanggan Baru</h2>
      <p class="section-lead">
        Di halaman ini Anda dapat menambahkan data pelanggan baru
    </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

                <form action="{{route('create.Pelanggan')}}" method="post">
                  @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" placeholder="Masukan Nama" name="nama_pelanggan" class="form-control">
                </div>
              </div>
           
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="alamat" placeholder="Masukan Email" class="form-control inputtags">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telepon</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="telepon" placeholder="Masukan Password" class="form-control">
                </div>
              </div>

          
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button type="submit" class="btn btn-primary">Create</button>
                  <a href="/Pelanggan" class="btn btn-primary">Kembali</a>
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
@extends('layouts.main')

@section('title', 'Data Pelanggan')

@section('text', 'Edit data Pelanggan')
    

@section('content')


<section class="section">
    <div class="section-body">
      <h2 class="section-title">Edit data Pelanggan</h2>
      <p class="section-lead">
        Di halaman ini Anda dapat melakukan update data Pelanggan    </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

                <form action="" method="post">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="" value="" class="form-control">
                </div>
              </div>

           
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="" value="" class="form-control inputtags">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telepon</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="" value="" class="form-control inputtags">
                </div>
              </div>


          
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button type="submit" class="btn btn-primary">Update</button>
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
@extends('layouts.main')

@section('title', 'Transaksi')
@section('text', 'Tambah data transaksi')


@section('content')


<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Produk yang dipilih</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>qty</th>
                    <th>Total Harga</th>
                </tr>
                <tr>
                    <td>Laptop</td>
                    <td>12000</td>
                    <td>2</td>
                    <td>14000</td>
                </tr>
            </table>
        </div>
      </div>
    </div>

      <div class="col-12 col-md-6 col-lg-6">
       <div class="card" id="sample-login">
        <form method="POST">
          <div class="card-body pb-0">

            <div class="form-group">
              <label>Nama Pelanggan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" placeholder="Email">
              </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label>No Handphone</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="d-flex justify-content-end ">
              <button type="submit" class="btn btn-primary">Pesan</button>
            </div>

              <hr>

         
        
 
          </div>
        </form>
       </div>
    </div>
      
    </div>


@endsection
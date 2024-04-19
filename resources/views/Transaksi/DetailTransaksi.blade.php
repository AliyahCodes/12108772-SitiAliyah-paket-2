@extends('layouts.main')

@section('title', 'Dashboard User')

@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Invoice</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Invoice</div>
        </div>
      </div>

      <div class="section-body">
        <div class="invoice">
          <div class="invoice-print">
            <div class="row">
              <div class="col-lg-12">
                <div class="invoice-title">
                  <h2>Invoice</h2>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <address>
                      <strong>Kasir:</strong><br>
                      nama<br>
                       
                    </address>
                  </div>
                  <div class="col-md-6 text-md-right">
                    <address>
                      <strong>Pelanggan:</strong><br>
                      Nama<br>
                       No telepon<br>
                      Alamat<br>
                    </address>
                  </div>
                </div>
                <div class="row">
                
                  <div class="col-md-6 text-md-right">
                    <address>
                      <strong>Order Date:</strong><br>
                      September 19, 2018<br><br>
                    </address>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-md-12">
                <div class="section-title">Pesanan</div>
                <p class="section-lead">data disini tidak bisa dihapus</p>
                <div class="table-responsive">
                  <table class="table table-striped table-hover table-md">
                    <tr>
                      <th data-width="40">#</th>
                      <th>Nama Produk</th>
                      <th class="text-center">Harga</th>
                      <th class="text-center">Jumlah Produk</th>
                      <th class="text-right">Total</th>
                    </tr>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td> {{$item->produk_name}}</td>
                      <td class="text-center">{{format_rupiah ($item->produk->harga)}}</td>
                      <td class="text-center">{{$item->qty}}</td>
                      <td class="text-center">{{format_rupiah ($item->subtotal)}}</td>
                    </tr>
                    @endforeach
                   
                  </table>
                </div>
                <div class="row mt-4">
                  <div class="col-lg-8">
                    <div class="section-title">Cara Pembayaran
                    </div>
                    <p class="section-lead">The payment method that we provide is to make it easier for you to pay invoices.</p>
                  </div>
                  <div class="col-lg-4 text-right">
                    <div class="invoice-detail-item">
                      <div class="invoice-detail-name">Subtotal</div>
                      <div class="invoice-detail-value">{{format_rupiah( $penjualan->TotalHarga)}}</div>
                    </div>
                   
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="text-md-right">
            <div class="float-lg-left mb-lg-0 mb-3 d-flex justify-content-end">
                <a href="/Transaksi" class="btn btn-danger btn-icon icon-right"><i class="fas fa-times"></i> Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
</div>
</div>


    
@endsection
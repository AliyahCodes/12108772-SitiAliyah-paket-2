<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="{{asset('admin/css/invoice.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/components.css')}}">


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
                 <br><br>
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
                <tr>
                  <td></td>
                  <td></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
               
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
                  <div class="invoice-detail-value"></div>
                </div>
               
            </div>
            </div>

<script type="text/javascript">
    window.print();

</script>
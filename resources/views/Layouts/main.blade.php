<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no |" name="viewport">
  <title>Kasir | @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('admin/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('admin/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('admin/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
          </form>
          
          <ul class="navbar-nav navbar-right">
           
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{asset('admin/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="index.html">Kasir</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">Kasir</a>
            </div>
            <ul class="sidebar-menu">
              @if (Auth::user()->role == 1) 
                  
              <li class="menu-header">Dashboard</li>
              <li class="dropdown">
                <a href="dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              @else()
              <li class="menu-header">Dashboard</li>
              <li class="dropdown">
                <a href="staf"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              @endif


              <li class="menu-header">Starter</li>
                <li><a class="nav-link" href="/Produk"><i class="fas fa-columns"></i> <span>Produk</span></a></li>
                <li><a class="nav-link" href="/Transaksi"><i class="fas fa-cart-plus"></i> <span>Transaksi</span></a></li>
                <li><a class="nav-link" href="/Pelanggan"><i class="fas fa-user"></i> <span>Pelanggan</span></a></li>
                <li><a class="nav-link" href="/User"><i class="fas fa-user"></i> <span>User</span></a></li>
              
              <li class="menu-header">Auth</li>
              <li><a class="nav-link" href="/logout"><i class="fas fa-arrow-down"></i> <span>Logout</span></a></li>
        </div>
  
        <!-- Main Content -->
        <div class="main-content">
            <div class="card">
                <div class="card-header">
                  <h4>@yield('text')</h4>
                </div>
            </div>
               
            @yield('content')
        </div>
  
  

  <!-- General JS Scripts -->
  <script src="{{asset('admin/modules/jquery.min.js')}}"></script>
  <script src="{{asset('admin/modules/popper.js')}}"></script>
  <script src="{{asset('admin/modules/tooltip.js')}}"></script>
  <script src="{{asset('admin/modules/bootstrap/js')}}/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('admin/modules/moment.min.js')}}"></script>
  <script src="{{asset('admin/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('admin/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('admin/modules/chart.min.js')}}"></script>
  <script src="{{asset('admin/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('admin/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('admin/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('admin/js/page/index.js')}}"></script>

  <script src="{{asset('admin/js/page/bootstrap-modal.js)')}}"></script>

  
  <!-- Template JS File -->
  <script src="{{asset('admin/js/scripts.js')}}"></script>
  <script src="{{asset('admin/js/custom.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data Supplier</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src='main.js'></script>
</head>
<body>
    <h1 class="text-center">Data Supplier</h1>   
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    
                  <a class="nav-link" href="/">Transaksi</a>
                        <a class="nav-link" href="/barang">Barang</a>
                        <a class="nav-link" href="/karyawan">Karyawan</a>
                       <a class="nav-link" href="/mobil">Mobil</a>
                      <a class="nav-link" href="/supplier">Supplier</a>
                      <a class="nav-link" href="/view">Informasi Restock</a>
                      
                      <a class="nav-link" href="/history">history Transaksi</a>
                      <a class="nav-link" href="/statusPengiriman">Informasi Pengiriman</a>
                      <a class="nav-link" href="/about">About Us</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="mt-3 container">
        @yield('konten')
    </div>

</body>
</html>
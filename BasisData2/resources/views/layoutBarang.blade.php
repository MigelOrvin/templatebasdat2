<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data Barang</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src='main.js'></script>
</head>
<body>
    <h1 class="text-center">Data Barang</h1>   
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
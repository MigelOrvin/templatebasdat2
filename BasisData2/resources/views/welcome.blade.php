<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Toko Bangunan</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src='main.js'></script>
</head>
<body>
    <h1 class="text-center">
    Toko Bangunan Bumi Jaya
    </h1>
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
    @if(session()->has('message'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
    <div class="d-flex justify-content-between">
    <div class="mt-4">
      <h2>Transaksi</h2>
    </div>
    <div class="mt-4">
        
      <h2>{{$idBarang}} item</h2>
      
    </div>
  </div>
         
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('submitTransaksi') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="barang">Nama Barang:</label>
            <input type="text" class="form-control" id="barang" name="barang" value="{{ old('barang') }}">
            @error('barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Barang:</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="0">
        </div>

        <button type="submit" class="btn btn-primary">Add Items</button>
    </form>
    <div class="d-flex">
        <div class="mt-2">
        <a class="btn btn-success" href="{{ route('viewTransaksi') }}">Beli ditempat</a>
        <a class="btn btn-success" href="{{ route('viewPengiriman') }}">Dikirim</a>
        
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#barang').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ url('/autocompletes') }}",
                    data: {
                        query: request.term
                    },
                    dataType: "json",
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.namaBarang,
                                value: item.namaBarang
                            };
                        }));
                    }
                });
            },
            minLength: 1,
        });
    });

</script>
    
    
    
    
</body>

</html>
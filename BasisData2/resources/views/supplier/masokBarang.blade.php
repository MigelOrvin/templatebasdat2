@extends('layoutSupplier')
@section('konten')
<div class="container">
    <h2>Pemasokkan Barang</h2>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('supplier.submitStok') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Supplier:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

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
        <div class="form-group">
            <label for="hargaBeli">Harga Beli:</label>
            <input type="text" class="form-control" id="hargaBeli" name="hargaBeli" placeholder="0">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#name').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ url('/supplier/pemasokkanBarang/autocomplete') }}",
                    data: {
                        query: request.term
                    },
                    dataType: "json",
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.nama,
                                value: item.nama
                            };
                        }));
                    }
                });
            },
            minLength: 1,
        });
        $('#barang').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ url('/supplier/pemasokkanBarang/autocompletes') }}",
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

@endsection
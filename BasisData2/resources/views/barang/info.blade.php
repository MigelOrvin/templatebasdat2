@extends('layoutBarang')
@section('konten')
    
<div class="d-flex">
        <h4>Informasi Stok yang sedikit</h4>
    </div>
    <table class="table">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
        </tr>
        @foreach ($barang as $no=>$data)
        <tr>
            <td>{{ $data->idBarang}}</td>
            <td>{{ $data->namaBarang }}</td>
            <td>{{ $data->stok }}</td>
        </tr>
        @endforeach
    </table>
@endsection
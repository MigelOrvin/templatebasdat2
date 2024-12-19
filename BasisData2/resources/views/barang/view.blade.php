@extends('layoutBarang')
@section('konten')
@if(session()->has('message'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('message') }}
        </div>
    @endif
    <div class="d-flex">
        <h4>List Data Barang</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('barang.add') }}">Tambah Barang</a>
        <a class="btn btn-warning" href="{{ route('barang.info') }}">Low Stok Items</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Harga Jual</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>
        @foreach ($barang as $no=>$data)
        <tr>
            <td>{{ $data->idBarang }}</td>
            <td>{{ $data->namaBarang }}</td>
            <td>{{ $data->merk }}</td>
            <td>{{ $data->hargaJual }}</td>
            <td>{{ $data->stok }}</td>
            <td><a href="{{route('barang.edit', $data->idBarang)}}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{route('barang.delete', $data->idBarang)}}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" >
                    @csrf
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>    
        </td>
        </tr>
        @endforeach
    </table>
@endsection
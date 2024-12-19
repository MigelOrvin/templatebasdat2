@extends('layoutSupplier')
@section('konten')
@if(session()->has('message'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('message') }}
        </div>
    @endif
<div class="d-flex">
        <h4>List Data Supplier</h4>
        <div class="ms-auto">
        <a class="btn btn-warning" href="{{ route('supplier.masokBarang') }}">Add Stok Barang</a>
        <a class="btn btn-success" href="{{ route('supplier.add') }}">Tambah Supplier</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>ID Supplier</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th></th>
        </tr>
        @foreach ($supplier as $no=>$data)
        <tr>
            <td>{{ $data->idSupplier}}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->noTelp }}</td>
            <td><a href="{{route('supplier.edit', $data->idSupplier)}}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{route('supplier.delete', $data->idSupplier)}}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" >
                    @csrf
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
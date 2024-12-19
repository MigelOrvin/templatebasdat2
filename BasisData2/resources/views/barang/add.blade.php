@extends('layoutBarang')
@section('konten')
<h4>Penambahan Barang</h4>
    <form action="{{route('barang.submitBarang')}}" method="POST">
    @csrf
        <label>ID Barang:</label>
        <input type="text" name="idBarang" id="idBarang" class="form-control mb-2">
        <label>Nama Barang:</label>
        <input type="text" name="namaBarang" id="namaBarang" class="form-control mb-2">
        <label>Merk:</label>
        <input type="text" name="merk" id="merk" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
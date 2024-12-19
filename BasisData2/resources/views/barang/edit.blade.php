@extends('layoutBarang')
@section('konten')
<h4>Edit Barang</h4>
    <form action="{{route('barang.update', $barang->idBarang)}}" method="POST">
    @csrf
    <!-- <label>ID Barang:</label>
        <input type="text" name="namaBarang" value="{{$barang->idBarang}}" id="idBarang" class="form-control mb-2"> -->
        <label>Nama Barang:</label>
        <input type="text" name="namaBarang" value="{{$barang->namaBarang}}" id="namaBarang" class="form-control mb-2">
        <label>Merk:</label>
        <input type="text" name="merk" value="{{$barang->merk}}" id="merk" class="form-control mb-2">
        <label>Harga Jual:</label>
        <input type="text" name="hargaJual" value="{{$barang->hargaJual}}" id="hargaJual" class="form-control mb-2">
        <label>Stock:</label>
        <input type="text" name="stok" value="{{$barang->stok}}" id="stok" class="form-control mb-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
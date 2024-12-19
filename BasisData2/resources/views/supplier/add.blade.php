@extends('layoutSupplier')
@section('konten')
    <h4>Penambahan Supplier</h4>
    <form action="{{route('supplier.submitSupplier')}}" method="POST">
    @csrf
        <label>ID Supplier:</label>
        <input type="text" name="idSupplier" id="idSupplier" class="form-control mb-2">
        <label>Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control mb-2">
        <label>Nomor Telepon:</label>
        <input type="text" name="noTelp" id="noTelp" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
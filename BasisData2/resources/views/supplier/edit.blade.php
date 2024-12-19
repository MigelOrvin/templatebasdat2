@extends('layoutSupplier')
@section('konten')
    <h4>Penambahan Supplier</h4>
    <form action="{{route('supplier.update', $supplier->idSupplier)}}" method="POST">
    @csrf
        <label>Nomor Telepon:</label>
        <input type="text" name="noTelp" value="{{$supplier->noTelp}}" id="noTelp" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
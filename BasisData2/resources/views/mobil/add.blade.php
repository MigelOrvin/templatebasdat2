@extends('layoutMobil')
@section('konten')
    <h4>Penambahan Mobil</h4>
        <form action="{{route('mobil.submitMobil')}}" method="POST">
        @csrf
            <label>Plat Kendaraan:</label>
            <input type="text" name="platKendaraan" id="platKendaraan" class="form-control mb-2">
            <label>jenis:</label>
            <input type="text" name="jenis" id="jenis" class="form-control mb-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
@extends('layoutKaryawan')
@section('konten')
    <h4>Edit Karyawan</h4>
    <form action="{{route('karyawan.update', $karyawan->nik)}}" method="POST">
    @csrf
        <label>Nama:</label>
        <input type="text" name="nama" value="{{$karyawan->nama}}" id="nama" class="form-control mb-2">
        <label>Nomor Telepon:</label>
        <input type="text" name="noTelp" value="{{$karyawan->noTelp}}" id="noTelp" class="form-control mb-2">
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{$karyawan->alamat}}" id="alamat" class="form-control mb-2">
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
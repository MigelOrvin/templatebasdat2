@extends('layoutKaryawan')
@section('konten')
    <h4>Penambahan Karyawan</h4>
    <form action="{{route('karyawan.submitKaryawan')}}" method="POST">
    @csrf
        <label>NIK:</label>
        <input type="text" name="nik" id="nik" class="form-control mb-2">
        <label>Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control mb-2">
        <label>Nomor Telepon:</label>
        <input type="text" name="noTelp" id="noTelp" class="form-control mb-2">
        <label>Alamat:</label>
        <input type="text" name="alamat" id="alamat" class="form-control mb-2">
        <label>Jenis Kelamin:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-Laki">
            <label class="form-check-label" for="Laki-Laki">
                Laki-Laki
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Perempuan">
            <label class="form-check-label" for="Perempuan">
                Perempuan
            </label>    
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
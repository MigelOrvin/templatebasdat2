@extends('layoutKaryawan')
@section('konten')
    @if(session()->has('message'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('message') }}
        </div>
    @endif

    <div class="d-flex">
        <h4>List Data Karyawan</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('karyawan.add') }}">Tambah Karyawan</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Gaji Minggu ini</th>
            <th>Tanggal Masuk</th>
            <th>Bon</th>
            <th>Gaji Bersih</th>
        </tr>
        @foreach ($karyawan as $no=>$data)
        <tr>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->noTelp }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->jenisKelamin }}</td>
            <td>{{ $data->gaji }}</td>
            <td>{{ $data->tanggalMasuk }}</td>
            <td>{{ $data->Bon }}</td>
            <td>{{ $data->gaji - $data->Bon }}</td>
            <td>
            <a href="{{route('karyawan.edit', $data->nik)}}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{route('karyawan.delete', $data->nik)}}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" >
                    @csrf
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex">
        <h4>Edit Section</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('karyawan.gaji') }}">Tambah Gaji Karyawan</a>
            <a class="btn btn-danger" href="{{ route('karyawan.bon') }}">Tambah Bon Karyawan</a>
        </div>
    </div>



@endsection
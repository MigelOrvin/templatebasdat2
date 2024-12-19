@extends('layoutMobil')
@section('konten')
@if(session()->has('message'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('message') }}
        </div>
    @endif
<div class="d-flex">
        <h4>List Data Mobil</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('mobil.add') }}">Tambah Mobil</a>
        </div>
    </div>
    <table class="table">
    <table class="table">
        <tr>
            <th>Plat Kendaraan</th>
            <th>Jenis</th>
            <th>Status Mobil</th>
        </tr>
        @foreach ($mobil as $no=>$data)
        <tr>
            <td>{{ $data->platKendaraan }}</td>
            <td>{{ $data->jenis }}</td>
            <td>{{ $data->statusMobil }}</td>
            <td>
            <form action="{{route('mobil.delete', $data->platKendaraan)}}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini? Data yang berkaitan dengan kendaraan ini akan hilang')" >
                    @csrf
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
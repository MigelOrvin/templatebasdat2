@extends('layoutView')
@section('konten')
    
<div class="d-flex">
        <h4>Informasi Pengiriman</h4>
    </div>
    <table class="table">
        <tr>
            <th>ID Pengiriman</th>
            <th>ID Transaksi</th>
            <th>Tanggal Pengiriman</th>
            <th>Status Pengiriman</th>
            <th>Tanggal Transaksi</th>
            <th>Total Transaksi</th>
            <th>Plat Kendaraan</th>
            <th>Jenis</th>
            <th>NIK</th>
            <th>Nama Karyawan</th>

        </tr>
        @foreach ($info as $no=>$data)
        <tr>
            <td>{{ $data->idPengiriman}}</td>
            <td>{{ $data->idTransaksi }}</td>
            <td>{{ $data->tanggalPengiriman }}</td>
            <td>{{ $data->statusPengiriman }}</td>
            <td>{{ $data->tanggalTransaksi}}</td>
            <td>{{ $data->totalTransaksi}}</td>
            <td>{{ $data->platKendaraan}}</td>
            <td>{{ $data->jenis }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->namaKaryawan}}</td>
        </tr>
        @endforeach
    </table>
@endsection
@extends('layoutView')
@section('konten')
    
<div class="d-flex">
        <h4>Informasi Barang Yang Terjual</h4>
    </div>
    <table class="table">
        <tr>
            <th>Nama Barang</th>
            <th>Total Jumlah Barang Terjual</th>
            <th>Total Pendapatan</th>
        </tr>
        @foreach ($info as $no=>$data)
        <tr>
            <td>{{ $data->namaProduk}}</td>
            <td>{{ $data->totalJumlahBarangTerjual }}</td>
            <td>{{ $data->totalPendapatan }}</td>
        </tr>
        @endforeach
    </table>
@endsection
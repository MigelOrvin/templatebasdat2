@extends('layoutView')
@section('konten')
    
<div class="d-flex">
        <h4>Informasi Restock</h4>
    </div>
    <table class="table">
        <tr>
            <th>Bulan</th>
            <th>Jumlah Transaksi Pemasokan</th>
            <th>Modal</th>
            <th>Estimasi Keuntungan</th>
        </tr>
        @foreach ($info as $no=>$data)
        <tr>
            <td>{{ $data->Bulan}}</td>
            <td>{{ $data->{'Jumlah Transaksi Pemasokan'} }}</td>
            <td>{{ $data->Modal }}</td>
            <td>{{ $data->{'Estimasi Keuntungan'} }}</td>
        </tr>
        @endforeach
    </table>
@endsection
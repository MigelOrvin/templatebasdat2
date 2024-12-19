<?php

namespace App\Http\Controllers;

use App\Models\detailtransaksi;
use App\Models\transaksi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class transaksiController extends Controller
{
    public function view()
    {
        $id = DB::select('select idTransaksi() as id');
        $ids = $id[0]->id;
        $idBarang = detailTransaksi::where('idTransaksi', $ids)
        ->count('idBarang');
        return view('welcome',compact('idBarang'));
    }
    public function lunas()
    {   
        $id = DB::select('select idTransaksi() as id');
        $ids = $id[0]->id;
        DB::select("update transaksi set statusPembayaran = 'Lunas' where idTransaksi = '$ids'");
        DB::select("update transaksi set tanggalTransaksi = curdate() where idTransaksi = '$ids'");
        DB::select("insert into transaksi (idPembeli, statusPembayaran, tanggalTransaksi) values (null, 'Belum Lunas', curdate())");
        return redirect()->route('welcome')->with('message','Udah Dibayar!');
    }
    public function ngutang()
    {
        $id = DB::select('select idTransaksi() as id');
        $ids = $id[0]->id;
        DB::select("update transaksi set statusPembayaran = 'Belum Lunas' where idTransaksi = '$ids'");
        DB::select("update transaksi set tanggalTransaksi = curdate() where idTransaksi = '$ids'");
        DB::select("insert into transaksi (idPembeli, statusPembayaran, tanggalTransaksi) values (null, 'Belum Lunas', curdate())");
        return redirect()->route('welcome')->with('message','Udah Dibayar!');
    }
    public function viewTransaksi(){
        $id = DB::select('select idTransaksi() as id');
        $ids = $id[0]->id;
        $detailTransaksi = detailTransaksi::where('idTransaksi', $ids)->get();
        $totalharga = detailTransaksi::where('idTransaksi', $ids)
                        ->sum('totalHarga');
        return view('viewTransaksi', ['detailTransaksi'=> $detailTransaksi], compact('totalharga'));
    }

    public function submitTransaksi(Request $request){
        
        DB::select("call TransaksiBarang('$request->barang', '$request->jumlah')");

        return redirect()->route('welcome')->with('message','Udah di Tambahin Itemsnya Bos!');
     }
}

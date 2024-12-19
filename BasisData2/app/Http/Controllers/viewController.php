<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function view()
    {
        $info = DB::select("select * from informasiRestock");
        
        return view('view.informasiRestock', ['info'=> $info]);
    }

    public function history(){
        $info = DB::select("SELECT 
    b.namaBarang AS namaProduk, 
    ROUND(SUM(dt.jumlahBarang), 2) AS totalJumlahBarangTerjual, 
    SUM(dt.totalHarga) AS totalPendapatan 
FROM 
    detailTransaksi dt 
JOIN 
    barang b ON dt.idBarang = b.idBarang 
GROUP BY 
    dt.idBarang, b.namaBarang 
ORDER BY 
    totalJumlahBarangTerjual DESC
");
return view("view.history", ["info"=> $info]);
    }

    public function status(){
        $info = DB::select("select * from informasiPengiriman");
        return view("view.informasiPengiriman", ["info"=> $info]);
    }
    public function about(){
        return view("view.about");
    }

}

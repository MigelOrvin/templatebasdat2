<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    public function view()
    {
        $barang = barang::all();
        return view('barang.view', ['barang'=> $barang]);
    }
    public function add()
    {
        return view('barang.add');
    }

    public function info()
    {
        $barang = DB::select("SELECT b.idBarang, b.namaBarang, b.stok
FROM barang b
WHERE b.stok < 10
ORDER BY b.stok ASC;");
        return view('barang.info', ['barang'=> $barang]);
    }

    public function submitBarang(Request $request){
        $supplier = new barang();
        $supplier->idBarang = $request->idBarang;
        $supplier->namaBarang = $request->namaBarang;
        $supplier->merk = $request->merk;
        $supplier->hargaJual = 0;
        $supplier->stok = 0;
        $supplier->save();
        return redirect()->route('barang.view')->with('message','Data Barang Berhasil Ditambah');
    }
    public function delete($idBarang){
        DB::delete("Delete from barang where barang.idBarang = '$idBarang'");
        
        return redirect()->route('barang.view')->with('message','Data Barang Berhasil Dihapus!');
    }
    public function edit($idBarang){
        $barang = Barang::where('idBarang', $idBarang)->first();
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $idBarang)
{    
    $hargajual = $request->hargaJual;
    DB::select("update barang set namaBarang = '$request->namaBarang' where idBarang = '$idBarang'");
    DB::select("update barang set merk = '$request->merk' where idBarang = '$idBarang'");
    DB::select("update barang set hargajual = $hargajual where idBarang = '$idBarang'");
    DB::select("update barang set stok = $request->stok where idBarang = '$idBarang'");

    

    return redirect()->route('barang.view')->with('message', 'Berhasil di Edit');
}
   
}

<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\supplier;
use Illuminate\Http\Request;
use App\Models\pemasokkanBarang;

use Illuminate\support\Facades\DB;
class supplierController extends Controller
{
    public function view()
    {
        $supplier = supplier::all();
        return view('supplier.view', ['supplier'=> $supplier]);
    }

    public function addSupplier()
    {
        return view('supplier.add');
    }
    public function pemasokkanBarang()
    {
        return view('supplier.masokBarang');
    }

    public function submitStok(Request $request){
       $pemasokkan = new pemasokkanBarang();
       $idSupplier = DB::select("Select findIDbynamaSupplier('$request->name') as idSup");
       $pemasokkan->idSupplier = $idSupplier[0]->idSup;
       $idBarang = DB::select("Select findIDbynamaBarang('$request->barang') as idBarang");
       $pemasokkan->idBarang = $idBarang[0]->idBarang;
       $pemasokkan->jumlahBarang = $request->jumlah;
       $pemasokkan->hargaBeli = $request->hargaBeli;
       $pemasokkan->tanggalPemasokan = date(now());
       $pemasokkan->save();
       return redirect()->route('supplier.view')->with('message','Udah di pesen bos!');
    }

    public function submitSupplier(Request $request){
        $supplier = new supplier();
        $supplier->idSupplier = $request->idSupplier;
        $supplier->nama = $request->nama;
        $supplier->noTelp = $request->noTelp;
        $supplier->save();
        return redirect()->route('supplier.view')->with('message','Data Supplier Berhasil Ditambah');
    }

    public function delete($idSupplier){
        DB::delete("Delete from pemasokkan_barang where pemasokkan_barang.idSupplier = '$idSupplier'");
        DB::delete("Delete from supplier where supplier.idSupplier = '$idSupplier'");
        
        return redirect()->route('supplier.view')->with('message','Data Supplier Berhasil Dihapus!');
    }
    
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $data = supplier::where('nama', 'LIKE', "%{$query}%")->select('idSupplier', 'nama')->get();

        return response()->json($data);
    }

    public function autocompletes(Request $request)
    {
        $query = $request->get('query');
        $data = barang::where('namaBarang', 'LIKE', "%{$query}%")->select('idBarang', 'namaBarang')->get();

        return response()->json($data);
    }
    

    public function edit($idSupplier){
        $supplier = supplier::where('idSupplier', $idSupplier)->first();
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $idSupplier)
{    

    DB::select("update supplier set noTelp = $request->noTelp where idSupplier = '$idSupplier'");

    

    return redirect()->route('supplier.view')->with('message', 'Berhasil di Edit');
}

}

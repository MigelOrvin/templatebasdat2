<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobil;

use Illuminate\support\Facades\DB;

class mobilController extends Controller
{
    public function view()
    {
        $mobil = mobil::all();
        return view('mobil.view', ['mobil'=> $mobil]);
    }

    public function addMobil()
    {
        return view('mobil.add');
    }

    public function submitMobil(Request $request){
        $mobil = new mobil();
        $mobil-> platKendaraan = $request->platKendaraan;
        $mobil->jenis = $request->jenis;
        $mobil->statusMobil = 'available';
        $mobil->save();
        return redirect()->route('mobil.view')->with('message','Data Mobil Berhasil Ditambah');
    }

    public function delete($platKendaraan){
        
        DB::delete("Delete from pengiriman where pengiriman.platKendaraan = '$platKendaraan'");
        DB::delete("Delete from mobil where mobil.platKendaraan = '$platKendaraan'");
        
        return redirect()->route('mobil.view')->with('message','Data Mobil Berhasil Dihapus!');
    }
}

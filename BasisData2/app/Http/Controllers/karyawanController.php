<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\logBon;
use App\Models\logGaji;
class karyawanController extends Controller
{
    //
    public function view()
    {
        $karyawan = karyawan::all();
        return view('karyawan.view', ['karyawan'=> $karyawan]);
    }

    public function addKaryawan()
    {
        return view('karyawan.add');
    }
    public function submitKaryawan(Request $request){
        $karyawan = new karyawan();
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->noTelp = $request->noTelp;
        $karyawan->alamat = $request->alamat;
        $selectedOption = $request->input('flexRadioDefault');
        $karyawan->jenisKelamin = $selectedOption;
        $karyawan->gaji = 0;
        $karyawan->tanggalMasuk = date(now());
        $karyawan->bon = 0;
        $karyawan->save();
        return redirect()->route('karyawan.view')->with('message','Data Karyawan Berhasil Ditambah');
    }

    public function edit($nik){
        $karyawan = karyawan::where('nik', $nik)->first();
        return view('karyawan.edit', compact('karyawan'));
    }
    public function update(Request $request, $nik)
{    

    DB::select("update karyawan set nama = '$request->nama' where nik = '$nik'");
    DB::select("update karyawan set alamat = '$request->alamat' where nik = '$nik'");
    DB::select("update karyawan set noTelp = '$request->noTelp' where nik = '$nik'");

    

    return redirect()->route('karyawan.view')->with('message', 'Berhasil di Edit');
}

    public function addBon()
    {
        return view('karyawan.bon');
    }
    public function addGaji()
    {
        return view('karyawan.gaji');
    }
    public function ngebon(Request $request){
        $logBon = new logBon();
        $nama = $request->name;
        $id = DB::select("SELECT nikKaryawan('$nama') as nik");
        $logBon->nik =  $id[0]->nik;
        $logBon->Bon = $request->Bon;
        $logBon->tanggal = date(now());
        $logBon->save();
        $karyawan = karyawan::all();
        return view('karyawan.view', ['karyawan'=> $karyawan]);
    }
    public function gaji(Request $request){
        $logGaji = new logGaji();
        $nama = $request->name;
        $id = DB::select("SELECT nikKaryawan('$nama') as nik");
        $logGaji->nik = $id[0]->nik;
        $logGaji->gaji = $request->gaji;
        $logGaji->info = $request->info; 
        $logGaji->tanggal = date(now());
        $logGaji->save();
        $karyawan = karyawan::all();
        return view('karyawan.view', ['karyawan'=> $karyawan]);
    }

    public function delete($nik){
        DB::delete("Delete from logBon where logBon.nik = '$nik'");
        DB::delete("Delete from logGaji where logGaji.nik = '$nik'");
        DB::delete("Delete from pengiriman where pengiriman.nik = '$nik'");
        DB::delete("Delete from karyawan where karyawan.nik = '$nik'");
        
        return redirect()->route('karyawan.view')->with('message','Data Karyawan Berhasil Dihapus!');
    }
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $data = Karyawan::where('nama', 'LIKE', "%{$query}%")->select('nik', 'nama')->get();

        return response()->json($data);
    }

}

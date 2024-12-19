<?php

namespace App\Http\Controllers;

use App\Models\detailtransaksi;
use App\Models\karyawan;
use App\Models\transaksi;
use App\Models\mobil;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\support\Facades\DB;

class pengirimanController extends Controller
{
    public function viewPengiriman(){
        $id = DB::select('select idTransaksi() as id');
        $ids = $id[0]->id;
        $detailTransaksi = detailTransaksi::where('idTransaksi', $ids)->get();
        $totalharga = detailTransaksi::where('idTransaksi', $ids)
                        ->sum('totalHarga');
        return view('viewPengiriman', ['detailTransaksi'=> $detailTransaksi], compact('totalharga'));
    }
    public function submitPengiriman(Request $request){
        $selectedOption = $request->input('flexRadioDefault');
        $tanggalPengiriman = $request->input('tanggalPengiriman');
        $tanggalPengirimanFormatted = Carbon::createFromFormat('Y-m-d', $tanggalPengiriman)->format('Y-m-d');

        DB::select("call inputPengiriman('$request->nama', '$request->notelp', '$request->alamat', '$selectedOption', '$request->platKendaraan', '$request->namaKaryawan', '$tanggalPengirimanFormatted')");
        DB::select("insert into transaksi (idPembeli, statusPembayaran, tanggalTransaksi) values (null, 'Belum Lunas', curdate())");
        return redirect()->route('welcome')->with('message','Udah diPO boss , nanti dikirim!!');
     }

    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $data = Mobil::where('platKendaraan', 'LIKE', "%{$query}%")->select('platKendaraan', 'jenis')->get();

        return response()->json($data);
    }

    public function autocompletes(Request $request)
    {
        $query = $request->get('query');
        $data = karyawan::where('nama', 'LIKE', "%{$query}%")->select('NIK', 'nama')->get();

        return response()->json($data);
    }
   
}

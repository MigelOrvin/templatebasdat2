<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";
    protected $primary_key = "nik";
    protected $fillable = ["nik", "nama", "noTelp", "alamat", "jenisKelamin","gaji", "tanggalMasuk", "Bon"];
    public $timestamps = false;
}

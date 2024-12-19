<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasokkanBarang extends Model
{
    use HasFactory;
    protected $table = "pemasokkan_barang";
    protected $fillable = ['idSupplier', 'idBarang', 'jumlahBarang', 'hargaBeli', 'tanggalPemasokan'];
    public $timestamps = false;
}

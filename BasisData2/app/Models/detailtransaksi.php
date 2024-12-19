<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailtransaksi extends Model
{
    use HasFactory;
    protected $table = "detailtransaksi";
    protected $fillable = ['idTransaksi', 'idBarang', 'jumlahBarang', 'totalHarga'];
    
    public $timestamps = false;
}

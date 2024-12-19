<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $fillable = ['idTransaksi', 'idPembeli', 'statusPembayaran', 'tanggalTransaksi'];
    
    public $timestamps = false;
}

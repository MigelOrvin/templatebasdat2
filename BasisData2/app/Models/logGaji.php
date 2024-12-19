<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logGaji extends Model
{
    use HasFactory;
    protected $table = "loggaji";
    protected $fillable = ["nik", "gaji", "info", "tanggal"];
    public $timestamps = false;
}

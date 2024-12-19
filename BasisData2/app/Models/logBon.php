<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logBon extends Model
{
    use HasFactory;
    protected $table = "logbon";
    protected $fillable = ["nik", "Bon", "tanggal"];
    public $timestamps = false;
}

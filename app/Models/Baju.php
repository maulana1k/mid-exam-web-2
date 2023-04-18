<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisBaju;
use App\Models\Penjualan;

class Baju extends Model
{
    use HasFactory;
    protected $fillable = ['nama','harga','ukuran','id_jenis'];


    public function jenis_baju()
    {
        return $this->belongsTo(JenisBaju::class,'id_jenis');
    }
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }

}

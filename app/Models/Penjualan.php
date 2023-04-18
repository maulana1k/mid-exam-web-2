<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Baju;
class Penjualan extends Model
{
    use HasFactory;
    public function baju()
    {
        return $this->belongsTo(Baju::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Baju;

class JenisBaju extends Model
{
    use HasFactory;
    protected $fillable = ['jenis'];
    public function baju()
    {
        return $this->hasOne(Baju::class);
    }
}

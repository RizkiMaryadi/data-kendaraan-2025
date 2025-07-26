<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = ['dealer_id', 'merek', 'model', 'tahun', 'harga'];

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}

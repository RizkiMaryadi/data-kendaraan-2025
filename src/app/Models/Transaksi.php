<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['kendaraan_id', 'nama_pembeli', 'no_ktp', 'tanggal_transaksi', 'jumlah_bayar'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}


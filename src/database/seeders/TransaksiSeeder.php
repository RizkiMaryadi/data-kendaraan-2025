<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use App\Models\Kendaraan;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {
        $kendaraan = Kendaraan::first();

        Transaksi::create([
            'kendaraan_id' => $kendaraan->id,
            'nama_pembeli' => 'Andi Setiawan',
            'no_ktp' => '3173xxxxxxxx0001',
            'tanggal_transaksi' => now(),
            'jumlah_bayar' => 250000000,
        ]);
    }
}

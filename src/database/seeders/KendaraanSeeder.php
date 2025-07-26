<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use App\Models\Dealer;

class KendaraanSeeder extends Seeder
{
    public function run(): void
    {
        $dealer = Dealer::first();

        Kendaraan::create([
            'dealer_id' => $dealer->id,
            'merek' => 'Toyota',
            'model' => 'Avanza',
            'tahun' => 2023,
            'harga' => 250000000,
        ]);
    }
}


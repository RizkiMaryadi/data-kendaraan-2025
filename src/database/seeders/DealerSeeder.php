<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dealer;

class DealerSeeder extends Seeder
{
    public function run(): void
    {
        Dealer::create([
            'nama' => 'Dealer Maju Jaya',
            'alamat' => 'Jl. Raya Cengkareng No. 10',
            'telepon' => '021-98765432',
        ]);
    }
}

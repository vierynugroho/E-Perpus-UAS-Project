<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pinjam;
use Illuminate\Support\Arr;

class PinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            Pinjam::create([
                'id' => $i,
                'id_user' => '000000000000000' . random_int(1, 3),
                'id_buku' => random_int(1, 3),
                'status_pinjam' => Arr::random(['DIPINJAM', 'PENDING', 'DIKEMBALIKAN']),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

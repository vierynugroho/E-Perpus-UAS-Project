<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Literation;
use Illuminate\Support\Str;

class LiterationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            Literation::create([
                'id' => $i,
                'id_user' => '100000000000000' . random_int(1, 3),
                'judul' => Str::random(10),
                'id_buku' => random_int(1, 3),
                'halaman_dibaca' => random_int(1, 9) . " - " . random_int(2, 99),
                'ringkasan' => Str::random(400),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

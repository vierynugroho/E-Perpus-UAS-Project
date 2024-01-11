<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            Book::create([
                'id' => $i,
                'penulis' => "Penulis$i",
                'judul' => "Judul$i",
                'penerbit' => "Penerbit$i",
                'id_kategori' => random_int(1, 3),
                'tahun' => 200 . random_int(1, 4),
                'quantity' => random_int(1, 10),
                'sinopsis' => Str::random(250),
                'cover' => "public/cover/buku$i.png",
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

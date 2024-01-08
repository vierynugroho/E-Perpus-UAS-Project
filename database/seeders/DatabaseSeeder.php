<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $category = new Category;
        $category->id = 1;
        $category->name = 'Informatika';
        $category->created_at = now();
        $category->save();

        $buku = new Book;
        $buku->id = 1;
        $buku->id_kategori = 1;
        $buku->judul = 'Desain Analisa Algoritma';
        $buku->penulis = 'Sigit Rendang';
        $buku->tahun = '2024';
        $buku->quantity = 5;
        $buku->save();
    }
}

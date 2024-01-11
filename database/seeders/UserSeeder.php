<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->nik = '1111111111111111';
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->email_verified_at = now();
        $admin->password = Hash::make('password');
        $admin->is_admin = 1;
        $admin->created_at = now();
        $admin->updated_at = now(); // Mengubah 'update_at' menjadi 'updated_at'
        $admin->save();

        for ($i = 1; $i <= 3; $i++) {
            User::create([
                'nik' => '000000000000000' . $i,
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_admin' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
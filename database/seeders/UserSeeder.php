<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin FIC11',
            'email' => 'admin@fic11.id',
            'role' => 'admin',
            'email_verified_at' => now(),
            'unhashed_password' => 'password',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Asus Official Store',
            'email' => 'asus@fic11.id',
            'role' => 'seller',
            'email_verified_at' => now(),
            'unhashed_password' => 'password',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Infinix Official Store',
            'email' => 'infinix@fic11.id',
            'role' => 'seller',
            'email_verified_at' => now(),
            'unhashed_password' => 'password',
            'password' => Hash::make('password'),
        ]);

        User::factory(10)->create();
    }

}

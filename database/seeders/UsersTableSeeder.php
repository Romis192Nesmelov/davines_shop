<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Несмелов Роман Сергеевич',
            'email' => 'romis.nesmelov@gmail.com',
            'email_verified_at' => '2025-11-13 11:20:42',
            'password' => bcrypt('Fuckingpassword192')
        ]);
    }
}

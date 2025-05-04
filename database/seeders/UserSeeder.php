<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'sa@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '001',
            'google_id' => null,
            'presence' => 0,
            'role'=> 1,
            'remember_token' => Str::random(10),
        ]);
    }
}

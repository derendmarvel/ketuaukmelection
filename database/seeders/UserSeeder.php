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
            // 'google_id' => null,
            'presence' => 0,
            'role'=> 1,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Derend Marvel Hanson Prionggo',
            'email' => 'dmarvelhanson@student.ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> '0706012210030',
            // 'google_id' => null,
            'presence' => 1,
            'role'=> 2,
            'candidate_id' => null,
            'remember_token' => Str::random(10),
        ]);
    }
}

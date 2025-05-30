<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();

        $this->call([
            UKMSeeder::class,
            CandidateSeeder::class,
            UserSeeder::class,
            UKMUserSeeder::class,
        ]);

        Model::reguard();
    }
}

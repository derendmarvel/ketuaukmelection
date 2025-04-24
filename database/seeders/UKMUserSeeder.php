<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UKMUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ukm_user')->insert([
            'ukm_id' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ukm_user')->insert([
            'ukm_id' => 2,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ukm_user')->insert([
            'ukm_id' => 3,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}

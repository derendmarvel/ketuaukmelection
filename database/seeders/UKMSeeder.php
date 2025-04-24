<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ukm')->insert([
            'name' => 'Balawarta',
            'logo' => '/images/LOGO SC.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Task Force Sakura',
            'logo' => '/images/LOGO BUKU.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'BDC',
            'logo' => '/images/LOGO SRB.png',
        ]);
    }
}

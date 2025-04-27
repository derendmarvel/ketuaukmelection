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
            'name' => 'Abstract',
            'logo' => '/images/Logo UKM/Abstract.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Artupic',
            'logo' => '/images/Logo UKM/Artupic.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Balawarta',
            'logo' => '/images/Logo UKM/Balawarta.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Basket',
            'logo' => '/images/Logo UKM/Basket.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'BDC',
            'logo' => '/images/Logo UKM/BDC.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Choir',
            'logo' => '/images/Logo UKM/Choir.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Esport',
            'logo' => '/images/Logo UKM/Esport.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Futsal',
            'logo' => '/images/Logo UKM/Futsal.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Hindu Dharma',
            'logo' => '/images/Logo UKM/Hindu Dharma.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Kanvas',
            'logo' => '/images/Logo UKM/Kanvas.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'KMK',
            'logo' => '/images/Logo UKM/KMK.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Mahatra',
            'logo' => '/images/Logo UKM/Mahatra.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'MCUC',
            'logo' => '/images/Logo UKM/MCUC.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'PMK',
            'logo' => '/images/Logo UKM/PMK.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Resonance',
            'logo' => '/images/Logo UKM/Resonance.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Tabletop',
            'logo' => '/images/Logo UKM/Tabletop.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Taekwondo',
            'logo' => '/images/Logo UKM/Taekwondo.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Tari Tradisional',
            'logo' => '/images/Logo UKM/Tari Tradisional.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Task Force Sakura',
            'logo' => '/images/Logo UKM/Task Force Sakura.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'Teater',
            'logo' => '/images/Logo UKM/Teater.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'UCBC',
            'logo' => '/images/Logo UKM/UCBC.png',
        ]);

        DB::table('ukm')->insert([
            'name' => 'UCDS',
            'logo' => '/images/Logo UKM/UCDS.png',
        ]);
    }
}

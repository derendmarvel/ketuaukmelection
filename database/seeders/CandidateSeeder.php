<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidate::create([
            'names' => 'Odilia Keisha & Bryan Jonathan',
            'number_of_votes' => 0,
            'photo' => '/images/Candidate 1.png',
            'ukm_id' => 1,
        ]);   

        Candidate::create([
            'names' => 'Calista Wijaya & Yosua Pirono',
            'number_of_votes' => 0,
            'photo' => '/images/Candidate 2.png',
            'ukm_id' => 1,
        ]);   
    }
}

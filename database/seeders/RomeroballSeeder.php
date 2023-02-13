<?php

namespace Database\Seeders;

use App\Models\Romeroball;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RomeroballSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Romeroball::factory()->create(['bal_romeroball' => 'GreatBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'UltraBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'PinkBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'TinaBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'MosiahBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'LegendaryBall']);
    }
}

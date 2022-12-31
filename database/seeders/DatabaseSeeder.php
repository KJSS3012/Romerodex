<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Romeroball;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['email'=>'kaique.s@escolar.ifrn.edu.br']);
        Romeroball::factory()->create(['bal_romeroball' => 'GreatBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'UltraBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'PinkBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'TinaBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'MosiahBall']);
        Romeroball::factory()->create(['bal_romeroball' => 'LegendaryBall']);
    }
}

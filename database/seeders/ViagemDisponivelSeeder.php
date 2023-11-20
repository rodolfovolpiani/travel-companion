<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ViagemDisponivel;

class ViagemDisponivelSeeder extends Seeder
{
    public function run()
    {
        ViagemDisponivel::factory()->count(5)->create();
    }
}

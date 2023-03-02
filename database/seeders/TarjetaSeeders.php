<?php

namespace Database\Seeders;

use App\Models\Tarjetas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarjetaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarjetas::factory(5)->create();

    }
}

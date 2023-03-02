<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mesas;
use Illuminate\Database\Seeder;
use Database\Seeders\Menuseeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            $this->call(UserSeeders::class);
            $this->call(MenusSeeders::class);            
            $this->call(MesasSeeders::class);
            $this->call(HorarioSeeders::class);
            $this->call(TarjetaSeeders::class);
            // $this->call(EventSeeders::class);
            

            
            
    }
}

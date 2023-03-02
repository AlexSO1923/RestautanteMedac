<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        $User=new User();
        $User->name='Alex';
        $User->email='alex23@medac.es';
        $User->email_verified_at=now();
        $User->password='$2y$10$bg5b2E8jaMwpHTcsft0g9e4aX2IZCdWf2GaE/TD7VBkhiFB2a.04W';
        $User->phone='611010632';
        $User->save();
    }
}

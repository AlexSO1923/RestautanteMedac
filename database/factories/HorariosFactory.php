<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HorariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha'=> fake()->dateTimeBetween($starDate=' 0 days', $endDate='+5days') ,
            'hora' => fake()->randomElement(['08:00:00', '08:30:00', '09:00:00', '09:30:00', '10:00:00', '10:30:00',
             '11:00:00', '11:30:00', '12:00:00', '12:30:00', '13:00:00', '13:30:00', '14:00:00', '14:30:00', '15:00:00', '15:30:00', '16:00', 
             '16:30:00', '17:00:00', '17:30:00', '18:00:00', '18:30:00', '19:00:00', '19:30:00', '20:00:00', '20:30:00', '21:00:00', '21:30', 
             '22:00:00', '22:30:00','23:00:00']),
            'estado'=>'Disponible',
        ];
    }
}

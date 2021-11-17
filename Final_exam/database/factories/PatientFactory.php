<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Doctor;


class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'dni' => $this->faker->numberBetween(0,99999999).str::random(1),
            'birthday' => now(),
            'vacunated' => $this->faker->boolean(),
            'doctor_id'=> (Doctor::all()->random()->id)
        ];
    }
}

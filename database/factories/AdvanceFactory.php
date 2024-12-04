<?php

namespace Database\Factories;

use App;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Offer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advance>
 */
class AdvanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'offer_id' => Offer::all()->random()->id,
            'state' =>  $this->faker->randomElement(['In-progress','Finished',"Paused"]),
            'phase'=> $this->faker->text(), 
            'commentary' => $this->faker->text(),
        ];
    }
}

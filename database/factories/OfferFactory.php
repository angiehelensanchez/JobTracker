<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company(),
            'offer_name' => $this->faker->jobTitle(),
            'attendance' => $this->faker->randomElement(['On-site','Hybrid',"Remote"]),
            'salary_range' => $this->faker->text(),
            'description' => $this->faker->text(),         
            'url' =>  $this->faker->url(),
            'state' =>  $this->faker->randomElement(['In-progress','Finished',"Paused"]),
        ];
    }
}

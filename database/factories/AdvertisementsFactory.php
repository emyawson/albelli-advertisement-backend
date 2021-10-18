<?php

namespace Database\Factories;

use App\Models\Advertisements;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'valid_until' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'link' => $this->faker->url()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'title' => fake() ->word(),
            'release_year' => fake() -> datetime(),
            'price' => fake() -> randomFloat(2,  20,  100),
            'barcode' => fake() -> unique() -> ean8(),
            'disponibilità' => fake() -> randomDigit()


        ];
    }
}

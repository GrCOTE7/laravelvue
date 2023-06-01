<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
        $faker = Faker::create('fr_FR');
		return [
			'title'   => substr($faker->sentence(3), 0, -1),
			'user_id' => $faker->numberBetween(1, 10)
		];
	}
}

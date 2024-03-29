<?php
namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Event::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{
return [
'name' => $this->faker->sentence,
'description' => $this->faker->paragraph,
'date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'), // Random date within the next year
'location' => $this->faker->address,
];
}
}
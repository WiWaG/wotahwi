<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->word(),
                'price_night' => $this->faker->randomFloat(2, 30, 200),
                'beds' => $this->faker->numberBetween(1, 9),
                'description' => $this->faker->paragraph(),
                'image_path_1' => $this->faker->imageUrl(640, 480, 'room', true),
                'image_path_2' => $this->faker->imageUrl(640, 480, 'room', true),
                'image_path_3' => $this->faker->imageUrl(640, 480, 'room', true),
        ];
    }
}

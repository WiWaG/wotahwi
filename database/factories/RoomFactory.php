<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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

    public function configure()
    {
        return $this->afterCreating(function (Room $room) {
            DB::table('facility_room')->insert([
                'room_id' => $room->id,
                'facility_id' => 1,
                'quantity' => $this->faker->numberBetween(1, 9),
            ]);
            foreach ([2,3,4] as $facility) {
                DB::table('facility_room')->insert([
                'room_id' => $room->id,
                'facility_id' => $facility
            ]);
            }
        });
    }

    public function definition()
    {
        return [
                'name' => $this->faker->word(),
                'price_night' => $this->faker->randomFloat(2, 30, 200),

                'description' => $this->faker->paragraphs(),
                // 'image_path_1' => $this->faker->imageUrl(640, 480, 'room', true),
                // 'image_path_2' => $this->faker->imageUrl(640, 480, 'room', true),
                // 'image_path_3' => $this->faker->imageUrl(640, 480, 'room', true),
        ];
    }
}

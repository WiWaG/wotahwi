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

            for ($i=0; $i < 3; $i++) {
                DB::table('images')->insert([
                    'room_id' => $room->id,
                    'name' => "Kamer_$room->name"."_$i",
                    'file_path' => $this->faker->imageUrl(640, 480, 'room', true),
                ]);
            }
        });
    }

    public function definition()
    {
        return [
                'name' => $this->faker->word(),
                'price_night' => $this->faker->randomFloat(2, 30, 200),

                'description' => $this->faker->paragraphs(3, true),

        ];
    }
}

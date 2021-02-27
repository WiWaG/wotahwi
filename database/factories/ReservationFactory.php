<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function configure()
    {
        return $this->afterCreating(function (Reservation $reservation) {
            $room = $this->faker->randomElement(Room::all());
            $reservation->room()->attach($room, ['unit_price' => $room->price_night,'vat'=> 0, 'quantity' => rand(1, 10)]);
        });
    }

    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('now', '+2 years');
        $endDate = $this->faker->dateTimeInInterval($startDate, '+3 weeks');
        return [
            'user_id' => User::factory(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'price_total' => $this->faker->randomFloat(2, 30, 5000),
            'is_payed' => $this->faker->boolean(),
        ];
    }
}

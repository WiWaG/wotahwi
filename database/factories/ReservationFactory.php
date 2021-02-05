<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('now', '+2 years');
        $endDate = $this->faker->dateTimeInInterval($startDate, '+3 weeks');
        return [
            'user_id' => User::factory(),
            'room_id' => $this->faker->numberBetween(1, 4),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'price_total' => $this->faker->randomFloat(2, 30, 5000),
            'is_payed' => $this->faker->boolean(),
        ];
    }
}

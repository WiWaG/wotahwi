<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        \App\Models\User::factory(10)->create();
        \App\Models\Room::factory(4)->create();
        \App\Models\Reservation::factory(20)->create();
    }
}

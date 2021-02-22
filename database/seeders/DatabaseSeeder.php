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


        $this->call(FacilitiesSeeder::class);
        $this->call(RoomsSeeder::class);

        \App\Models\Reservation::factory(20)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('roomfacilities.facilities') as $facility) {
            DB::table('facilities')->insert([
                'name' => $facility
            ]);
        }
    }
}

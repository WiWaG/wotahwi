<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new \App\Models\User([
            'name' => 'super-admin',
            'email' => 'superadmin@wotahwi.nl',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone' => '0612345678',
        ]);
        $superadmin->save();
        $superadmin->assignRole(1);

        \App\Models\User::factory(10)->create();
    }
}

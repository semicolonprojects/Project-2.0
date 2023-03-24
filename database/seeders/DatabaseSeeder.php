<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Masuk;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'username' => 'admin',
            'role' => 'superadmin',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'marketing',
            'role' => 'marketing',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'finance',
            'role' => 'finance',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'logistik',
            'role' => 'logistik',
            'password' => bcrypt('123456')
        ]);

        Masuk::factory()->create([
            'user_id' => 1,
            'lat' => '-7.9593472',
            'long' => '112.6301696'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Call the FeatureSeeder to seed the features table
        $this->call(FeatureSeeder::class);
    }
}

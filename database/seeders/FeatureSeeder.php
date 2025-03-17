<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                'feature_name' => 'Model',
                'description' => 'Handles database interactions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'View',
                'description' => 'Displays user interface.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Controller',
                'description' => 'Handles logic and requests.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Routes',
                'description' => 'Defines URL paths.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Middleware',
                'description' => 'Filters HTTP requests.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Blade Templates',
                'description' => 'Simplifies views in Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Migrations',
                'description' => 'Manages database structure.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Seeders',
                'description' => 'Populates database with data.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Database',
                'description' => 'Stores application data.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_name' => 'Eloquent ORM',
                'description' => 'Simplifies database queries.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

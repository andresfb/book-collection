<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FormatSeeder::class,
            GenreSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}

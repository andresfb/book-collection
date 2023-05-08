<?php

namespace Database\Seeders;

use App\Models\Format;
use Illuminate\Database\Seeder;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Format::factory(['name' => 'hardcover', 'is_digital' => false])->create();
        Format::factory(['name' => 'paperback', 'is_digital' => false])->create();
        Format::factory(['name' => 'ebook', 'is_digital' => true])->create();
        Format::factory(['name' => 'audiobook', 'is_digital' => true])->create();
    }
}

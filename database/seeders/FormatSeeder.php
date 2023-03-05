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
        Format::factory(['name' => 'hardcover'])->create();
        Format::factory(['name' => 'paperback'])->create();
        Format::factory(['name' => 'ebook'])->create();
        Format::factory(['name' => 'audiobook'])->create();
    }
}

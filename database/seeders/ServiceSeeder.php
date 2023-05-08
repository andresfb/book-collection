<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::factory(['name' => 'Kindle'])->create();
        Service::factory(['name' => 'Audible'])->create();
        Service::factory(['name' => 'Calible'])->create();
        Service::factory(['name' => 'Library'])->create();
    }
}

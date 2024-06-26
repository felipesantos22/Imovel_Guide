<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        House::factory(0)->create();
    }
}

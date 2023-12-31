<?php

namespace Database\Seeders;

use App\Models\HolidayRequest;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HolidayRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HolidayRequest::factory(100)->create();
    }
}

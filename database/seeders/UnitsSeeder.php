<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $units = [
            [
                'name' => '31A',
            ],
            [
                'name' => '31B',
            ],
            [
                'name' => '31C',
            ],
            [
                'name' => '31D',
            ],
            [
                'name' => '31E',
            ],
            [
                'name' => '31F',
            ],
            [
                'name' => '31X',
            ],
            [
                'name' => '30G',
            ],
            [
                'name' => 'AngelBeats!',
            ],
            [
                'name' => '司令部',
            ],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}

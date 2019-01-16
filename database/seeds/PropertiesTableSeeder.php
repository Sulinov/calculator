<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fasades\DB;
use App\Property;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'name' => 'Котлован прямоугольный с откосами',
            'unit' => 'м3',
                  ]);
        Property::create([
            'name' => 'Котлован многоугольный с откосами',
            'unit' => 'м3',
                  ]);
        Property::create([
            'name' => 'Котлован круглый',
            'unit' => 'м3',
                  ]);
        Property::create([
            'name' => 'Траншея с откосами',
            'unit' => 'м3',
                  ]);
    }
}

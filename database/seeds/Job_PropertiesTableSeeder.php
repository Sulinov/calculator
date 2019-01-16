<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fasades\DB;
use App\JobProperty;

class Job_PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobProperty::create([
            'job_id' => '0',
            'property_id ' => '0',
            'value' => 'Длинна котлована по дну,м',
                  ]);
        JobProperty::create([
            'job_id' => '0',
            'property_id ' => '0',
            'value' => 'Ширина котлована по верху,м',
                  ]);
        JobProperty::create([
            'job_id' => '0',
            'property_id ' => '0',
            'value' => 'Длинна котлована по верху,м',
                  ]);
        JobProperty::create([
            'job_id' => '0',
            'property_id ' => '0',
            'value' => 'Глубина котлована,м',
                  ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fasades\DB;
use App\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'Земляные работы',
                  ]);
           
    }
}

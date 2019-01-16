<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fasades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'sulinov2017@gmail.com',
           'password' => bcrypt('secret'),
                  ]);
           
    }
}

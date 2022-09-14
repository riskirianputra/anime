<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [ 
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@softui.com',
            'password' => bcrypt('jambu123'),
            'created_at' => now(),
            'updated_at' => now()
        ],
          
          [
            'id' => 2,
            'name' => 'rian',
            'email' => 'riskirianputra@gmail.com',
            'password' => bcrypt('jambu123'),
            'created_at' => now(),
            'updated_at' => now()
          ]
        ]);


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('type')->insert([
        	
        	[
        		'id' => 1,
        		'type' => 'Movie',     
        		'slug' =>'movie',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'type' => 'Ova',     
        		'slug' =>'ova',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
                 
            [
        		'id' => 3,
        		'type' => 'Special',     
        		'slug' =>'special',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

            [
        		'id' => 4,
        		'type' => 'Tv',     
        		'slug' =>'tv',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],                
                
           
        ]);
    
    }
}
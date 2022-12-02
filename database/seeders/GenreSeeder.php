<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('genre')->insert([
        	
        	[
        		'id' => 1,
        		'nama_genre' => 'Action',     
        		'slug' =>'action',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'nama_genre' => 'Adventure',     
        		'slug' =>'adventure',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
                 
            [
        		'id' => 3,
        		'nama_genre' => 'Comedy',     
        		'slug' =>'comedi',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

            [
        		'id' => 4,
        		'nama_genre' => 'Drama',     
        		'slug' =>'drama',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],                
                
            [
        		'id' => 5,
        		'nama_genre' => 'Echii',     
        		'slug' =>'echii',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],      
            [
        		'id' => 6,
        		'nama_genre' => 'Fantay',     
        		'slug' =>'fantasy',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],      
            [
        		'id' => 7,
        		'nama_genre' => 'Super Power',     
        		'slug' =>'superpower',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],      
            [
        		'id' => 8,
        		'nama_genre' => 'Shounen',     
        		'slug' =>'shounen',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],      
            [
        		'id' => 9,
        		'nama_genre' => 'Scifi',     
        		'slug' =>'scifi',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],     
            [
        		'id' => 10,
        		'nama_genre' => 'Sports',     
        		'slug' =>'sport',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],      
            [
        		'id' => 11,
        		'nama_genre' => 'Isekai',     
        		'slug' =>'isekai',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],       
            [
        		'id' => 12,
        		'nama_genre' => 'School',     
        		'slug' =>'school',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],   
            [
        		'id' => 13,
        		'nama_genre' => 'Harem',     
        		'slug' =>'harem',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],   
            
        ]);
    
    }
}
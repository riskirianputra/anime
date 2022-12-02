<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;


class GenreController extends Controller
{
    public function index(){

        $genre = Genre::paginate(10);
        return  response()->json(['data' =>$genre]); 
    }

    public function create(){

        
        return view('genre.create');
    }

    public function store(Request $request ){

        $genre = Genre::create([
            
            'nama_genre' => $request->get('nama_genre'),
            'slug' => $request->get('slug')
                
            ]);      
        return redirect()->route('genre.index');

    }
}

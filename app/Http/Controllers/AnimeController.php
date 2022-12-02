<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\Abjad;
use App\Models\Type;
use Illuminate\Http\Request;
use DB;

class AnimeController extends Controller
{
   public function index() {
    
            $anime = Anime::latest()->get();

        return view('anime.index', compact('anime'));
   
   }

   public function create(){
      
            $anime = Anime::get();
            $genre = Genre::get();
            $abjad = Abjad::get();
            $type =  Type::get();

            return view('anime.create', compact('anime', 'genre','abjad','type'));
   }

   public function store(Request $request)
    {
            $request->hasFile('gambar');
            $file = $request->file('gambar');
            $name = $file->getClientOriginalName();            
            $extension = $file->getClientOriginalExtension();
            $newName = $name;
            $path =  $file->move(public_path('assets/img/anime'), $newName);          
             
            Anime::create([
                'id_genre' => $request -> id_genre,
                'id_abjad' => $request -> id_abjad,
                'id_type' => $request -> id_type,
                'judul' => $request->judul,                                
                'jumlah_episode' => $request->jumlah_episode,
                'rating' => $request->rating,
                'rilis' => $request->rilis,
                'sinopsis' => $request->sinopsis,
                'status' => $request->status,
                'gambar' => $name,               
                'studios' => $request-> studios,              
                'duration'=>$request -> duration,
            ]);                 

                return redirect()->route('anime.index');
    }

    public function show($id){

        $anime = Anime::findOrFail($id);

        return view('anime.show', compact('anime'));
    }

}

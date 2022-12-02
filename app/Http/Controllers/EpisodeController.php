<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Anime;

class EpisodeController extends Controller
{
    public function index(){

        $episode = Episode::all();
        $episode = $anime->Episode()->get();
        
        return view('episode.index', compact('episode'));
    }

    public function create(){
        $anime = Anime::get();

        return view('episode.create', compact('anime'));
    }

    public function store(Request $request ){

        $episode = Episode::create([
            
            'id_anime' => $request ->get ('id_anime'),
            'episode' => $request->get('episode'),
            'slug' => $request->get('slug')                
            ]);      
            
        return redirect()->route('episode.index');
    }

}

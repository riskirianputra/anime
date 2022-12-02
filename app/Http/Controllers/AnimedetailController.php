<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\episode;
use App\Models\Abjad;
use App\Models\Type;
use App\Models\Genre;

class AnimedetailController extends Controller
{
    public function index()
    {        
        $episode = Episode::all();
        $type = Type::all();
        $anime = Anime::latest()->get()->random(2);
        $animeall = Anime::latest()->get();
        $animeterkait = Anime::latest()->limit(4)->get();
        $episode = $anime->Episode()->get();
      

        return view('anime-page.anime-detail', compact('genre', 'anime', 'animeall', 'animeterkait','episode','type'));
    }

    public function show()
    {
        
    }

    public function anime_episode(Episode $episode)
       {
        
        $animeall = $episode->Anime()->get();
        $abjad = Abjad::all();   
        $episode = Episode::all();
        $type = Type::all();
        $anime = Anime::latest()->get()->random(2);        
        $animeterkait = Anime::latest()->limit(4)->get();

        return view('anime-page.daftar-anime', compact('episode', 'anime', 'animeall', 'animeterkait','type','abjad'));
       }

}

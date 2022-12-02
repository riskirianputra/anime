<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Genre;
use App\Models\Type;
use App\Models\Abjad;
use App\Models\Episode;

class DaftaranimeController extends Controller
{
    public function index() {
    
        $genre = Genre::all();
        $type = Type::all();
        $abjad = Abjad::all();    
        $anime = Anime::latest()->get()->random(2);
        $animeall = Anime::latest()->get();
        $animeterkait = Anime::latest()->limit(4)->get();

        return view('anime-page.daftar-anime', compact('genre', 'anime', 'animeall', 'animeterkait','type','abjad'));
       }

    public function anime_genre(Genre $genre)
       {
        
        $animeall = $genre->Anime()->get();
        $abjad = Abjad::all();   
        $genre = Genre::all();
        $type = Type::all();
        $anime = Anime::latest()->get()->random(2);        
        $animeterkait = Anime::latest()->limit(4)->get();

        return view('anime-page.daftar-anime', compact('genre', 'anime', 'animeall', 'animeterkait','type','abjad'));
       }

    public function anime_abjad(Abjad $abjad)
       {
        
        $genre = Genre::all();
        $animeall = $abjad->Anime()->get();
        $abjad = Abjad::all();      
        $anime = Anime::latest()->get()->random(2);        
        $animeterkait = Anime::latest()->limit(4)->get();

        return view('anime-page.daftar-anime', compact('abjad', 'anime', 'animeall', 'animeterkait','genre'));
       }

    public function show(Anime $anime, Episode $episode)
    {
        $anime_detail = $anime;
        $episode_anime = $episode;
        $animeterkait = Anime::latest()->get()->random(2);
        $genre = Genre::withCount('Anime')->get();
        $type = Type::withCount('Anime')->get();

        return view('anime-page.anime-detail', compact('anime_detail', 'genre', 'animeterkait','episode_anime','type'));
    }
}

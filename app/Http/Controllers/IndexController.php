<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Genre;

class IndexController extends Controller
{
    public function index() {
    
        $genre = Genre::all();
        $anime = Anime::latest()->get()->random(2);
        $animeall = Anime::latest()->get();
        $animeterkait = Anime::latest()->limit(4)->get();

        return view('anime-page.index', compact('genre', 'anime', 'animeall', 'animeterkait'));
       }

    
}

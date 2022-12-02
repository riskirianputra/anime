<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abjad;
use DB;


class AbjadController extends Controller
{
    public function index(){

        $abjad = Abjad::paginate(10);

        return response()->json(['data' =>$abjad]); 
    }

    public function create(){

        
        return view('abjad.create');
    }

    public function store(Request $request ){

        $Abjad = Abjad::create([
            
            'nama_abjad' => $request->get('nama_abjad'),
            'slug' => $request->get('slug')
                
            ]);      
        return redirect()->route('abjad.index');

    }
}

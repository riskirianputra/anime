<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\type;

class TypeController extends Controller
{
    public function index(){

        $type = Type::paginate(10);

        return  response()->json(['data' => $type]); 
        
    }

    public function create(){

        
        return view('type.create');
    }

    public function store(Request $request ){

        $type = Type::create([
            
            'type' => $request->get('type'),
            'slug' => $request->get('slug')
                
            ]);      
        return redirect()->route('type.index');

    }
}

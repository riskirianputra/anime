<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'anime';

    protected $fillable = [
        'id_genre',
        'id_abjad',
        'id_type',
        'gambar',    
        'judul',
        'jumlah_episode',
        'rating',
        'rilis',
        'sinopsis',   
        'status',
        'studios',      
        'duration',
     

    ];

    public function genre()
    {
    	return $this->belongsTo(Genre::class, 'id_genre', 'id');
    }     

    public function abjad()
    {
    	return $this->belongsTo(Abjad::class, 'id_abjad', 'id');
    }  

    public function type()
    {
    	return $this->belongsTo(Type::class, 'id_type', 'id');
    }  

    public function episode()
    {
    	return $this->hasOne(Episode::class, 'id_anime', 'id');
    }  

    public function getRouteKeyName()
    {
        return 'judul';
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Episode extends Model
{
    protected $table = 'episode';

    protected $fillable = [
        'id',
        'id_anime',
        'episode',    
        'slug',    
    ];

    public function anime()
    {
    	return $this->belongsTo(Anime::class, 'id_anime', 'id');
    }     

   
    public function getRouteKeyName()
    {
        return 'episode';
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }

}

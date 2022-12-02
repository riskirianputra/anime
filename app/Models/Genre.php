<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Genre extends Model
{
    protected $table = 'genre';

    protected $fillable = [
        'id',
        'nama_genre',    
        'slug',    
    ];

    public function anime()
    {
    	return $this->hasOne(Anime::class, 'id_genre', 'id');
    }     

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }

}

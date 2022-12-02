<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Abjad extends Model
{
    protected $table = 'abjad';

    protected $fillable = [
        'id',
        'nama_abjad',    
        'slug',    
    ];

    public function anime()
    {
    	return $this->hasOne(Anime::class, 'id_abjad', 'id');
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

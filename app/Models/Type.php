<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type extends Model
{
    protected $table = 'type';

    protected $fillable = [
        'id',
        'type',    
        'slug',    
    ];

    public function anime()
    {
    	return $this->hasOne(Anime::class, 'id_type', 'id');
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

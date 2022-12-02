<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';

    protected $fillable = [
        'nama_project',        
    ];

    public function project()
    {
    	return $this->hasOne(Project::class, 'id_porto');
    }
}

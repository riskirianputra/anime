<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    protected $fillable = [
        'id_porto',
        'img',    
        'bahasa',    
    ];

    public function portofolio()
    {
    	return $this->belongsTo(Portofolio::class, 'id_porto');
    }     

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    protected $table = 'etiquetas';
    //protected $primary_key = 'categoria_id';
    protected $fillable = ['nombre', 'slug'];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    //protected $primary_key = 'categoria_id';
    protected $fillable = ['nombre', 'slug', 'cuerpo','status','file'];

    public function etiquetas()
    {
        return $this->belongsToMany('App\Models\Etiqueta');
    }
}

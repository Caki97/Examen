<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Categoria;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['titulo', 'descripcion'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato;
use App\Models\Categoria;
use App\Models\Articulo;
use App\Models\Post;
use App\Models\Etiqueta;


class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Categoria::all();

        return view('index',['datos'=>$datos]);  //view('index',compact('datos');
    
    }

    public function insertarTabla(){
        $etiqueta=Etiqueta::find(1);
        $post = Post::find(1);
        $post->etiquetas()->attach($etiqueta);
       }

    public function insertarPost(){
        $Post = new Post();
        $Post->nombre = 'nombre';
        $Post->slug = 'slug';
        $Post->cuerpo = 'cuerpo';
        $Post->status = 'DRAFT';
        $Post->file = 'fichero';
        $Post->save();
    }

}

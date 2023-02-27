<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class Etiquetas extends Controller
{
    public function almacenarPost(Request $request){

        $request=request()->validate([
            'nombre'=>'required|max:25', 
            'slug'=>'required',
            'cuerpo'=>'required',
            'status'=>'required',
            'file'=>'required']
        );

        Post::create($request);

        return back();
    }
        
}

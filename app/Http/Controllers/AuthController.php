<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function paciente(){
        return view('paciente');
    }

    public function admin(){
        return view('admin');
    }

}

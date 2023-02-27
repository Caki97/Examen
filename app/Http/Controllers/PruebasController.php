<?php

namespace App\Http\Controllers;
use App\Models\Prueba;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class PruebasController extends Controller
{
    public function login(Request $request)
     {
         $request->validate([
             'email' => 'required',
             'password' => 'required'
         ]);

         $credentials = $request->except(['_token']);

         Auth::attempt($credentials);

          if (auth()->attempt($credentials)) {  //comprobación de autenticación 

             return redirect()->route('admin');  //nos redirije a la ruta 'admin'

         } else {
             session()->flash('message', 'Invalid credentials');
             return redirect()->back();
         }
     }

     public function registro(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required',
             'role' => 'required'
         ]);

         $user = Prueba::create([
             'name' => trim($request->input('name')),
             'email' => strtolower($request->input('email')),
             'password' => bcrypt($request->input('password')),
             'role' => $request->input('role'),
         ]);

         return redirect()->route('admin');
     }

     public function logout(Request $request)
     {
         Session::flush();
         Auth::logout();
         return redirect('login');
     }

     public function getAuthPassword(){
        return $this->password;
    }
}

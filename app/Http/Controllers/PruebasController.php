<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Prueba;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

         $admin = Admin::create([
            'email' => strtolower($request->input('email')),
            'comentarios' => strtolower($request->input('comentarios')),
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

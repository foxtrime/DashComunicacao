<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view ('authe/index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //dd($request);
        $credentials = ['email'=>$request->email,'password'=>$request->password];

        if(Auth::attempt($credentials)){
            return redirect()->intended('home');
        }else{
            return redirect()->back()->with('msg','Acesso Negado, Email ou senha invalida');
        }
    }

    public function create()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return view('authe/create',compact('usuarios'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'perfil' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password','perfil']));
        
        //auth()->login($user);
        
        return redirect()->to('/register');
    }
    

}

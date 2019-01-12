<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // if (Auth::user()->type=='admin') {
        //     $usuarios = User::orderBy('id', 'ASC')->paginate(10);

        //     return view('admin.usuarios.index')->with('usuarios', $usuarios);
        // }
        // else{
        //   return view('home');  
        // }
        
        $usuarios = User::orderBy('id', 'ASC')->paginate(10);

        return view('admin.usuarios.index')->with('usuarios', $usuarios);
       
    }
}

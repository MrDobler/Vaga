<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;
use Vaga\Clinica;
use Vaga\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $planos = PlanoDeSaude::all();
        $clinicas = Clinica::all();
        $user = User::all(); 
        return view('home')
                ->with('planos', $planos)
                ->with('clinicas', $clinicas)
                ->with('user', $user);
    }
}

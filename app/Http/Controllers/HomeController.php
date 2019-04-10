<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imprensa;
use App\Jorgeface;
use App\Prefface;
use App\Solicitadesign;

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
        $imprensa = Imprensa::all();
        $facejorge = Jorgeface::all();
        $facepref = Prefface::all();
        $solicitades = Solicitadesign::all();
        //dd($facejorge);
        return view('home',compact('imprensa','facejorge','facepref','solicitades'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bear;

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
        $bears = Bear::all();
        // return view('home', $bears);
        return view('home')->with(['bears'=>$bears]);;

        
    }
}

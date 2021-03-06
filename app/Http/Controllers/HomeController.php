<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        if (Auth::check()&&Auth::user()->role=='admin') {
            return "halaman admin";
        } elseif(Auth::check()&&Auth::user()->role=='funners') {
            return "halaman funners";
        } elseif(Auth::check()&&Auth::user()->role=='panel'){
            return "halaman panel";
        };
    }
}

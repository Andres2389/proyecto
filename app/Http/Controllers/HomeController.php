<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
<<<<<<< HEAD
        // Simplemente retorna la vista sin pasar datos
        return view('admin.dashboard');
=======
        return view('home');
>>>>>>> 3e5931582f6be998297b6fe31bac1d679f967146
    }
}

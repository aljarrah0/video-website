<?php

namespace App\Http\Controllers;

use App\Models\Video;

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
        $rows = Video::latest()->get(['id', 'name', 'created_at', 'image']);

        return view('home', get_defined_vars());
    }
}

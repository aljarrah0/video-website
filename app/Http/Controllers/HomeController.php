<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $videos = Video::latest()->paginate(Controller::PAGE_SIZE, ['id', 'name', 'created_at', 'image']);

        return view('home', get_defined_vars());
    }

    public function category(Category $category)
    {
        $videos = Video::where('category_id', $category->id)->paginate(Controller::PAGE_SIZE);

        return view('front-end.categories.index', get_defined_vars());
    }
}

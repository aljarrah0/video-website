<?php

namespace App\Http\Controllers\BackEnd;

class HomeController extends BackEndController
{
    public function index()
    {
        return view('back-end.home');
    }
}

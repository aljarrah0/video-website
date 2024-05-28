<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;

class HomeController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        $title = trans('app.home');

        return view('back-end.home', get_defined_vars());
    }
}

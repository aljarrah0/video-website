<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;

class UserController extends BackEndController
{
    public function index()
    {
        $title = 'المستخدمين';
        $rows = User::paginate(10);

        return view('back-end.users.index', get_defined_vars());
    }
}

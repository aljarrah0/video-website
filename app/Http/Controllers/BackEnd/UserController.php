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

    public function create()
    {
        $title = 'إنشاء مستخدم';

        return view('back-end.users.create', get_defined_vars());
    }

    public function edit(User $user)
    {
        $title = 'تعديل المستخدم';

        return view('back-end.users.edit', get_defined_vars());
    }
}

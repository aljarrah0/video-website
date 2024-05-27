<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('admin.users.index')->with('تم إنشاء المستخدم بنجاح');
    }

    public function edit(User $user)
    {
        $title = 'تعديل المستخدم';

        return view('back-end.users.edit', get_defined_vars());
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email,'.$user->id],
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ?? $user->password,
        ]);

        return redirect()->route('admin.users.index')->with('تم تعديل المستخدم بنجاح');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('تم حذف المستخدم بنجاح');
    }
}

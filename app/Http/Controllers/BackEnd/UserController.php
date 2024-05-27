<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('admin.users.index')->with('تم إنشاء المستخدم بنجاح');
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
}

<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\UserRequest;
use App\Models\User;

class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(UserRequest $request)
    {
        $this->model->create($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ?? $user->password,
        ]);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

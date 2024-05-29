<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\SkillRequest;
use App\Models\Skill;

class SkillController extends BackEndController
{
    public function __construct(Skill $model)
    {
        parent::__construct($model);
    }

    public function store(SkillRequest $request)
    {
        $this->model->create($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(SkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

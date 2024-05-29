<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\TagRequest;
use App\Models\Tag;

class TagController extends BackEndController
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }

    public function store(TagRequest $request)
    {
        $this->model->create($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

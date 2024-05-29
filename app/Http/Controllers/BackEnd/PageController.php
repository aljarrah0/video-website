<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\BackEnd\PageRequest;
use App\Models\Page;

class PageController extends BackEndController
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function store(PageRequest $request)
    {
        $this->model->create($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

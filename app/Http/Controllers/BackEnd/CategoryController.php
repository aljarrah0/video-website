<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\CategoryRequest;
use App\Models\Category;

class CategoryController extends BackEndController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function store(CategoryRequest $request)
    {
        $this->model->create($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

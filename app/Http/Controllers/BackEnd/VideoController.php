<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\VideoRequest;
use App\Models\Category;
use App\Models\Video;

class VideoController extends BackEndController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    protected function with()
    {
        return ['user', 'category'];
    }

    protected function append()
    {
        return [
            'categories' => Category::get(['id', 'name']),
        ];
    }

    public function store(VideoRequest $request)
    {
        $this->model->create($request->validated() + ['user_id' => auth()->user()->id]);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(VideoRequest $request, Video $video)
    {
        $video->update($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

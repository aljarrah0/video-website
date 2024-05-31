<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\VideoRequest;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
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
        $variables = [
            'categories' => Category::get(['id', 'name']),
            'skills' => Skill::get(['id', 'name']),
            'tags' => Tag::get(['id', 'name']),
            'skillsSelected' => [],
            'tagsSelected' => [],
        ];

        $condition = request()->route()->parameter('video');
        if ($condition) {
            $variables['skillsSelected'] = $this->model->find($condition)->skills()->pluck('skills.id')->toArray();
            $variables['tagsSelected'] = $this->model->find($condition)->tags()->pluck('tags.id')->toArray();
        }

        return $variables;
    }

    public function store(VideoRequest $request)
    {
        $video = $this->model->create($request->validated() + ['user_id' => auth()->user()->id]);
        $video->skills()->sync($request->skills);
        $video->tags()->sync($request->tags);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(VideoRequest $request, Video $video)
    {
        $video->update($request->validated());
        $video->skills()->sync($request->skills);
        $video->tags()->sync($request->tags);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

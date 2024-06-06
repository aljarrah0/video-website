<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\VideoRequest;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Video;
use App\Traits\CommentTrait;
use Illuminate\Support\Str;

class VideoController extends BackEndController
{
    use CommentTrait;

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
            'comments' => [],
        ];

        $condition = request()->route()->parameter('video');
        if ($condition) {
            $variables['skillsSelected'] = $this->model->find($condition)->skills()->pluck('skills.id')->toArray();
            $variables['tagsSelected'] = $this->model->find($condition)->tags()->pluck('tags.id')->toArray();
            $variables['comments'] = $this->model->find($condition)->comments()->latest()->with('user')->get();
        }

        return $variables;
    }

    public function store(VideoRequest $request)
    {
        $image = $request->file('image');
        $imageName = time().Str::random(10).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        $video = $this->model->create(['user_id' => auth()->user()->id, 'image' => $imageName] + $request->validated());
        $video->skills()->sync($request->skills);
        $video->tags()->sync($request->tags);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function update(VideoRequest $request, Video $video)
    {
        $image = $request->file('image');
        if ($image) {
            $imageName = time().Str::random(10).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        $video->update(['image' => $imageName ?? $video->image] + $request->validated());
        $video->skills()->sync($request->skills);
        $video->tags()->sync($request->tags);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

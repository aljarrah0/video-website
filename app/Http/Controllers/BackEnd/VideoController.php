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

    public function index()
    {
        $title = trans('app.'.$this->getModelName().'.index');
        $create = trans('app.'.$this->getModelName().'.create');
        $edit = trans('app.'.$this->getModelName().'.edit');
        $delete = trans('app.'.$this->getModelName().'.delete');
        $model = $this->getModelName();
        $rows = $this->model->with('user', 'category');
        $rows = $this->filter($rows);
        $rows = $rows->paginate(BackEndController::PAGE_SIZE);

        return view('back-end.'.$this->getModelName().'.index', get_defined_vars());
    }

    public function create()
    {
        $title = trans('app.'.$this->getModelName().'.create');
        $model = $this->getModelName();
        $categories = Category::get(['id', 'name']);

        return view('back-end.'.$this->getModelName().'.create', get_defined_vars());
    }

    public function store(VideoRequest $request)
    {
        $this->model->create($request->validated() + ['user_id' => auth()->user()->id]);

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }

    public function edit($id)// هل استطيع أن احافظ على مفهوم injection
    {
        $title = trans('app.'.$this->getModelName().'.edit');
        $model = $this->getModelName();
        $row = $this->model->findOrFail($id);
        $categories = Category::get(['id', 'name']);

        return view('back-end.'.$this->getModelName().'.edit', get_defined_vars());
    }

    public function update(VideoRequest $request, Video $video)
    {
        $video->update($request->validated());

        return redirect()->route('admin.'.$this->getModelName().'.index');
    }
}

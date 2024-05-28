<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BackEndController extends Controller
{
    const PAGE_SIZE = 25;

    const LONG_PAGE_SIZE = 100;

    public function __construct(protected Model $model)
    {

    }

    public function index()
    {
        $title = trans('app.'.$this->getClassNameFromModel().'.index');
        $create = trans('app.'.$this->getClassNameFromModel().'.create');
        $edit = trans('app.'.$this->getClassNameFromModel().'.edit');
        $delete = trans('app.'.$this->getClassNameFromModel().'.delete');
        $model = $this->getClassNameFromModel();

        $rows = $this->model->paginate(BackEndController::PAGE_SIZE);

        return view('back-end.'.$this->getClassNameFromModel().'.index', get_defined_vars());
    }

    public function create()
    {
        $title = trans('app.'.$this->getClassNameFromModel().'.create');

        return view('back-end.'.$this->getClassNameFromModel().'.create', get_defined_vars());
    }

    public function edit($id)// هل استطيع أن احافظ على مفهوم injection
    {
        $title = trans('app.'.$this->getClassNameFromModel().'.edit');
        $row = $this->model->findOrFail($id);

        return view('back-end.'.$this->getClassNameFromModel().'.edit', get_defined_vars());
    }

    public function delete($id)// هل استطيع أن احافظ على مفهوم injection
    {
        $row = $this->model->findOrFail($id);

        $row->delete();

        return redirect()->route('admin.users.index')->with('تم حذف المستخدم بنجاح');
    }

    protected function getClassNameFromModel()
    {
        return strtolower($this->getPluralModelName());
    }

    protected function getPluralModelName()
    {
        return Str::plural($this->getModelName());
    }

    protected function getModelName()
    {
        return class_basename($this->model);
    }

    protected function filter($rows)
    {
        return $rows;
    }
}

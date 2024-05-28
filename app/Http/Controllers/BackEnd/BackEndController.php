<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BackEndController extends Controller
{
    public function __construct(protected Model $model)
    {

    }

    public function index()
    {

        $title = trans('app.'.$this->getClassNameFromModel().'.index');
        $rows = $this->model->paginate(10);

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

    public function delete($id)
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
        return Str::plural(strtolower(class_basename($this->model)));
    }

    protected function filter($rows)
    {
        return $rows;
    }
}

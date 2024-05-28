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
        $title = trans('app.'.$this->getModelName().'.index');
        $create = trans('app.'.$this->getModelName().'.create');
        $edit = trans('app.'.$this->getModelName().'.edit');
        $delete = trans('app.'.$this->getModelName().'.delete');
        $model = $this->getModelName();
        $rows = $this->model;
        $rows = $this->filter($rows);
        $rows = $rows->paginate(BackEndController::PAGE_SIZE);

        return view('back-end.'.$this->getModelName().'.index', get_defined_vars());
    }

    public function create()
    {
        $title = trans('app.'.$this->getModelName().'.create');
        $model = $this->getModelName();

        return view('back-end.'.$this->getModelName().'.create', get_defined_vars());
    }

    public function edit($id)// هل استطيع أن احافظ على مفهوم injection
    {
        $title = trans('app.'.$this->getModelName().'.edit');
        $model = $this->getModelName();
        $row = $this->model->findOrFail($id);

        return view('back-end.'.$this->getModelName().'.edit', get_defined_vars());
    }

    public function destroy($id)// هل استطيع أن احافظ على مفهوم injection
    {
        $row = $this->model->findOrFail($id);

        $row->delete();

        return redirect()->route('admin.users.index')->with('تم حذف المستخدم بنجاح');
    }

    protected function getModelName()
    {
        return strtolower(Str::plural(class_basename($this->model)));
    }

    protected function filter($rows)
    {
        return $rows;
    }
}

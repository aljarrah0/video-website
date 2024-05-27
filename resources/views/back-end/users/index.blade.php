@extends('back-end.layout.app')

@php
    $module = 'مستخدم';
    $descrption = 'جدول يقوم بعرض بيانات المستخدمين';
@endphp

@section('content')
    <h1>{{ $title }}</h1>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">{{ $title }}</h4>
                        <p class="card-category"> {{ $descrption }}</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="#pablo" class="btn btn-white btn-round">إضافة {{ $module }}</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                E-mail
                            </th>
                            <th class="text-right">
                                الإجراءات
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $row->name}}
                                </td>
                                <td>
                                    {{ $row->email }}
                                </td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="تعديل {{ $module }}" aria-describedby="tooltip15827">
                                    <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="حذف {{ $module }}">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection


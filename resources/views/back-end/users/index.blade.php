@extends('back-end.layout.app')

@php
    $descrption = 'جدول يقوم بعرض بيانات المستخدمين';
@endphp

@section('content')
    <h1>{{ $title }}</h1>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ $title }}</h4>
            <p class="card-category"> {{ $descrption }}</p>
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
                            <th>
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
                                <td>
                                    <a>تعديل</a>
                                    <a>حذف</a>
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


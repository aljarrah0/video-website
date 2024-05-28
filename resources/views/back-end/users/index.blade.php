@extends('back-end.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">{{ $title }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-white btn-round">{{ $create }}</a>
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
                                    @include('back-end.shared.buttons.edit')
                                    @include('back-end.shared.buttons.delete')
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


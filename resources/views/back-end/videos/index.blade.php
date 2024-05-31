@extends('back-end.layout.app')

@section('content')
    @component('back-end.shared.index', ['title' => $title, 'model' => $model, 'create' => $create, 'rows' => $rows, 'edit' => $edit, 'delete' => $delete])
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>#</th>
                        <th>{{ trans('app.name') }}</th>
                        <th>{{ trans('app.status') }}</th>
                        <th>{{ trans('app.categories.index') }}</th>
                        <th>{{ trans('app.users.index') }}</th>
                        <th class="text-right">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rows as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>
                                @if ($row->is_published == 1)
                                    <span class="material-icons">visibility</span>
                                @elseif ($row->is_published == 0)
                                    <span class="material-icons">visibility_off</span>
                                @endif
                            </td>
                            <td>{{ $row->category->name }}</td>
                            <td>{{ $row->user->name }}</td>
                            <td class="td-actions text-right">
                                @include('back-end.shared.buttons.edit')
                                @include('back-end.shared.buttons.destroy')
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="10">{{ trans('app.no_data') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endcomponent
@endsection


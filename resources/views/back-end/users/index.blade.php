@extends('back-end.layout.app')


@section('content')
    @component('back-end.shared.index', ['title' => $title, 'model' => $model, 'create' => $create, 'rows' => $rows, 'edit' => $edit, 'delete' => $delete])
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
                                @include('back-end.shared.buttons.destroy')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endcomponent
@endsection


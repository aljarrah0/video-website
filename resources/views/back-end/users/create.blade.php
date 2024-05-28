@extends('back-end.layout.app', ['title' => $title])

@section('content')
    @component('back-end.shared.create', ['title' => $title])
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            @include('back-end.users.form')
            <button type="submit" class="btn btn-primary pull-right">{{ $title }}</button>
            <div class="clearfix"></div>
        </form>
    @endcomponent
@endsection

@extends('back-end.layout.app', ['title' => $title])

@section('content')
    @component('back-end.shared.create', ['title' => $title])
        <form action="{{ route('admin.'.$model.'.store') }}" method="POST">
            @csrf
            @include('back-end.'.$model.'.form')
            <button type="submit" class="btn btn-primary pull-right">{{ $title }}</button>
            <div class="clearfix"></div>
        </form>
    @endcomponent
@endsection

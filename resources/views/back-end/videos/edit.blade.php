@extends('back-end.layout.app', ['title' => $title])

@section('content')
    @component('back-end.shared.edit', ['title' => $title])
        <form action="{{ route('admin.' . $model . '.update', $row) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('back-end.' . $model . '.form')
            <button type="submit" class="btn btn-primary pull-right">{{ $title }}</button>
            <div class="clearfix"></div>
        </form>
        @slot('video')
            @php
                $url = getYoutubeId($row->youtube);
            @endphp
            @if ($url)
                <iframe width="400" height="200" src="https://www.youtube.com/embed/{{ $url }}" style="margin-bottom: 20px" allowfullscreen></iframe>
            @endif
            <img src="{{ url('uploads/' . $row->image) }}" width="400" height="200">
        @endslot
    @endcomponent
    @component('back-end.shared.edit', ['title' => 'التعليقات'])
        @include('back-end.comments.index')
        @slot('video')
            @include('back-end.comments.create')
        @endslot
    @endcomponent
@endsection

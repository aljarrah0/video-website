@extends('back-end.layout.app', ['title' => $title])

@section('content')
    @component('back-end.shared.edit', ['title' => $title])
        <form action="{{ route('admin.'.$model.'.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            @include('back-end.'.$model.'.form')
            <button type="submit" class="btn btn-primary pull-right">{{ $title }}</button>
            <div class="clearfix"></div>
        </form>
        @slot('video')
            @php
                $url = getYoutubeId($row->youtube)
            @endphp
            @if ($url)
                <iframe width="400" src="https://www.youtube.com/embed/{{ $url }}" allowfullscreen></iframe>
            @endif
        @endslot
    @endcomponent
@endsection

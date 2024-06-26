@extends('layouts.app')

@section('title', $category->name)
@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h2>{{ $category->name }}</h2>
            </div>
            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4">
                        @include('front-end.shared.video-card')
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

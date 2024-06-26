@extends('layouts.app')

@section('title', $category->name)
@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h2>{{ $category->name }}</h2>
            </div>
            @include('front-end.shared.video-row')
        </div>
    </div>
@endsection

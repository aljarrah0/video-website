@extends('layouts.app')

@section('title', 'آخر الفيديوهات')
@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h2>آخر الفيديوهات</h2>
            </div>
            @include('front-end.shared.video-row')
        </div>
    </div>
@endsection

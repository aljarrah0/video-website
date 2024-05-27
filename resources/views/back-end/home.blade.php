@extends('back-end.layout.app', ['title' => 'Home Page'])

@push('css')
    <style>
        a {
            color: red !important ;
        }
    </style>
@endpush

@section('content')

    <h1>Home Page</h1>
@endsection

@push('js')
    <script>
        alert('Hi World')
    </script>
@endpush

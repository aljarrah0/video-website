@extends('back-end.layout.app', ['title' => $title])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ $title }}</h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        @include('back-end.users.form')
                        <button type="submit" class="btn btn-primary pull-right">{{ $title }}</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

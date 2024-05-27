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
                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">الاسم</label>
                            <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">الإيميل</label>
                            <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">كلمة المرور</label>
                            <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">{{ $title }}</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

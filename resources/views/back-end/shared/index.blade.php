<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">{{ $title }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('admin.'.$model.'.create') }}" class="btn btn-white btn-round">{{ $create }}
                            <span class="material-icons">
                                add
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

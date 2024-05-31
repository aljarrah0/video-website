<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{ $title }}</h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
    @if (isset($video))
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    {{ isset($video)? $video : '' }}
                    {{-- {{ $video }} --}}
                </div>
            </div>
        </div>
    @endif
</div>

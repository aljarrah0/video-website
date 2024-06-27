<div class="card" style="width: 20rem;">
    <a href="{{ route('frontend.videos', $video) }}" title="{{ $video->name }}">
        <img class="card-img-top" src="{{ url('uploads/' . $video->image) }}" alt="{{ $video->name }}"
            style="max-height: 160px">
        <div class="card-body">
            <p class="card-text">{{ $video->name }}</p>
            <small>{{ $video->created_at }}</small>
        </div>
    </a>
</div>

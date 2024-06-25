<div class="card" style="width: 20rem;">
    <img class="card-img-top" src="{{ url('uploads/' . $row->image) }}" alt="Card image cap" style="max-height: 160px">
    <div class="card-body">
        <p class="card-text">{{ $row->name }}</p>
        <small>{{ $row->created_at }}</small>
    </div>
</div>

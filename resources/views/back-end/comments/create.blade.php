<form action="{{ route('admin.comment.store') }}" method="POST">
    @csrf
    <input type="hidden" value="{{ $row->id }}" name="video_id">
    @include('back-end.comments.form')
    <button type="submit" class="btn btn-primary pull-right">إضافة تعليق</button>
    <div class="clearfix"></div>
</form>

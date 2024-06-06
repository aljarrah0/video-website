<form action="{{ route('admin.comment.store') }}" method="POST">
    @csrf
    @include('back-end.comments.form')
    <button type="submit" class="btn btn-primary pull-right">إضافة تعليق</button>
    <div class="clearfix"></div>
</form>

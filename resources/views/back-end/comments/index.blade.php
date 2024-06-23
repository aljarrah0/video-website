<table class="table">
    <tbody>
        @forelse ($comments as $comment)
            <tr>
                <td>{{ $loop->iteration }}:</td>
                <td>
                    <small>{{ $comment->user->name }}</small>
                    <p>{{ $comment->comment }}</p>
                    <small>{{ $comment->created_at }}</small>
                </td>
                <td>
                    <a href="{{ route('admin.comment.delete', $comment) }}" rel="tooltip"
                        class="btn btn-white btn-link btn-sm" data-original-title="حذف">
                        <i class="material-icons">close</i>
                    </a>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <form action="{{ route('admin.comment.update', ['id' => $comment]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{ $comment->video_id }}" name="video_id">
                        @include('back-end.comments.form', ['row' => $comment])
                        <button type="submit" class="btn btn-primary pull-right">تعديل تعليق</button>
                        <div class="clearfix"></div>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="10">{{ trans('app.no_data') }}</td>
            </tr>
        @endforelse
    </tbody>
</table>

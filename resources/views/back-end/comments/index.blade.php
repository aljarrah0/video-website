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
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="10">{{ trans('app.no_data') }}</td>
            </tr>
        @endforelse
    </tbody>
</table>

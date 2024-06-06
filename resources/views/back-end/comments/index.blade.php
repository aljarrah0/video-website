@forelse ($comments as $comment)
    <tr>
        <td>{{ $loop->iteration }}:</td>
        <td>{{ $comment->comment }}</td><br>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="10">{{ trans('app.no_data') }}</td>
    </tr>
@endforelse

<form action="{{ route('admin.'.$model.'.destroy', $row) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="{{ $delete }}">
        <i class="material-icons">close</i>
    </button>
</form>

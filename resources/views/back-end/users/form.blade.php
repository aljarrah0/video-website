<div class="row">
    @if (isset($row))
        <x-name :$row />
        <x-email :$row />
    @else
        @php $row = null @endphp
        <x-name :$row />
        <x-email :$row />
    @endif
    @php $input = 'password' @endphp
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.' . $input) }}</label>
            <input type="password" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
</div>

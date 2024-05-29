<div class="row">
    @php $input = 'name' @endphp
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'email' @endphp
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="email" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'password' @endphp
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="password" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
</div>

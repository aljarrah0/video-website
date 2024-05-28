<div class="row">
    @php $input = 'name' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = 'meta_keywords' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = 'meta_description' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id="" cols="30" rows="10">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

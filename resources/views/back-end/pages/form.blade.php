<div class="row">
    @if(isset($row))
        <x-name :$row  />
    @else
        @php $row = null @endphp
        <x-name :$row />
    @endif
    @php $input = 'meta_keywords' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'meta_description' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id="" cols="30" rows="10">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'description' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id="" cols="30" rows="10">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
</div>

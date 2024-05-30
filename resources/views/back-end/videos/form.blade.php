<div class="row">
    @php $input = 'name' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'meta_keywords' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'youtube' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <input type="url" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}" class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'is_published' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.status') }}</label>
            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
                <option class="dropdown-item" value="">{{ trans('app.select') }}</option>
                <option class="dropdown-item" value="1" @selected(old($input, isset($row) ? $row->{$input} : '') == 1)>{{ trans('app.is_published') }}</option>
                <option class="dropdown-item" value="0" @selected(old($input, isset($row) ? $row->{$input} : '') == 0)>{{ trans('app.is_hidden') }}</option>
            </select>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'category_id' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.categories.index') }}</label>
            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
                <option class="dropdown-item" value="">{{ trans('app.select') }}</option>
                @foreach ($categories as $category)
                    <option class="dropdown-item" value="{{ $category->id }}" @selected(old($input, isset($row) ? $row->{$input} : '') == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'meta_description' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id="" cols="30" rows="10">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'description' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.'.$input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id="" cols="30" rows="10">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
</div>

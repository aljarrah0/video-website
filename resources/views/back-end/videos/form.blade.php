<div class="row">
    @if (isset($row))
    @else
        @php $row = null @endphp
    @endif
    <x-name :$row />
    @php $input = 'meta_keywords' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.' . $input) }}</label>
            <input type="text" name="{{ $input }}" value="{{ old($input, isset($row) ? $row->{$input} : '') }}"
                class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'youtube' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.' . $input) }}</label>
            <input type="url" name="{{ $input }}"
                value="{{ old($input, isset($row) ? $row->{$input} : '') }}"
                class="form-control @error($input) is-invalid @enderror">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'image' @endphp
    <div class="col-md-6">
        <div class="">
            <input type="file" name="{{ $input }}"
                value="{{ old($input, isset($row) ? $row->{$input} : '') }}" accept="*.jpg"
                class="form-control @error($input) is-invalid @enderror m-2">
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'is_published' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.status') }}</label>
            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
                <option class="dropdown-item" value="">{{ trans('app.select') }}</option>
                <option class="dropdown-item" value="1" @selected(old($input, isset($row) ? $row->{$input} : '') == 1)>
                    {{ trans('app.is_published') }}</option>
                <option class="dropdown-item" value="0" @selected(old($input, isset($row) ? $row->{$input} : '') == 0)>{{ trans('app.is_hidden') }}
                </option>
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
                    <option class="dropdown-item" value="{{ $category->id }}" @selected(old($input, isset($row) ? $row->{$input} : '') == $category->id)>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'skills[]' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.skills.index') }}</label>
            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror"
                style="height: 100px" multiple>
                <option disabled>{{ trans('app.select') }}</option>
                @foreach ($skills as $skill)
                    {{-- <option value="{{ $skill->id }}" @selected(old($input, isset($row) ? $row->{$input} : '') == $skill->id)>{{ $skill->name }}</option> --}}
                    <option value="{{ $skill->id }}" @selected(in_array($skill->id, $skillsSelected))>{{ $skill->name }}</option>
                @endforeach
            </select>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'tags[]' @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.tags.index') }}</label>
            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror"
                style="height: 100px" multiple>
                <option disabled>{{ trans('app.select') }}</option>
                @foreach ($tags as $tag)
                    {{-- <option value="{{ $tag->id }}" @selected(old($input, isset($row) ? $row->{$input} : '') == $tag->id)>{{ $tag->name }}</option> --}}
                    <option value="{{ $tag->id }}" @selected(in_array($tag->id, $tagsSelected))>{{ $tag->name }}</option>
                @endforeach
            </select>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'meta_description' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.' . $input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id=""
                cols="30" rows="5">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
    @php $input = 'description' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ trans('app.' . $input) }}</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id=""
                cols="30" rows="5">{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
</div>

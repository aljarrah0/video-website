@php $input = 'phone' @endphp
<div class="col-md-4">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">{{ trans('app.' . $input) }}</label>
        <input class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" type="text"
            pattern="\d{11}" title="من فضلك أدخل 11 رقم" maxlength="11"
            value="{{ old($input, isset($row) ? $row->{$input} : '') }}"
            oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
        @include('back-end.shared.error')
    </div>
</div>

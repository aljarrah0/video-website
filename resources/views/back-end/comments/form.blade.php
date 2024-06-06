<div class="row">
    <input type="hidden" value="{{ $row->id }}" name="video_id">
    @php $input = 'comment' @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">تعليق</label>
            <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" id="" cols="30" rows="5" required>{{ old($input, isset($row) ? $row->{$input} : '') }}</textarea>
            @include('back-end.shared.error')
        </div>
    </div>
</div>

<div class="row">
    @if (isset($row))
    @else
        @php $row = null @endphp
    @endif
    <x-name :$row />
</div>

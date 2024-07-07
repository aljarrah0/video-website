<div class="row">
    @if(isset($row))
        <x-name :$row  />
    @else
        @php $row = null @endphp
        <x-name :$row />
    @endif
</div>

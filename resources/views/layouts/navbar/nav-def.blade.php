
@php
    $ROUTE_LIST = [
        'product',
        'user'
    ];
@endphp

@forelse ($ROUTE_LIST as $r)
<li class="nav-item">
    <a href="{{ $r }}" class="nav-link text-capitalize">{{ $r }}</a>
</li>
@empty

@endforelse


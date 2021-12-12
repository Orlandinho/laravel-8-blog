@props(['active' => false ])

@php
$classes = 'block text-left px-3 text-sm hover:bg-blue-400';

if ($active) $classes .= ' bg-blue-400';

@endphp

<a {{ $attributes(['class'=> $classes ]) }}>{{ $slot }}</a>

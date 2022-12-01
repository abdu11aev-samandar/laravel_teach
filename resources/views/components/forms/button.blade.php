@props(['class'])

<div>
    <button type="{{ $class }}">
        {{ $slot }}
    </button>
</div>

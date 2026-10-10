@props(['variant' => 'primary', 'type' => 'submit'])
@php
    $styles = [
        'primary' => 'background:#4a5f78;border-color:#3d4f64;color:#fff;',
        'danger'  => 'background:#8a5555;border-color:#734545;color:#fff;',
    ];
@endphp
<button type="{{ $type }}"
        {{ $attributes->merge(['style' => 'padding:6px 14px;border:1px solid;border-radius:6px;cursor:pointer;' . ($styles[$variant] ?? $styles['primary'])]) }}>
    {{ $slot }}
</button>

@props([
    'href' => '#',
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
])

@php
    $baseClasses = 'inline-flex items-center justify-center rounded-lg font-bold transition duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-white/40 focus:ring-offset-2 focus:ring-offset-black';

    $variantClasses = [
        'primary' => 'bg-white text-black hover:bg-gray-200',
        'secondary' => 'border border-white/30 text-white hover:bg-white/10',
        'dark' => 'border border-white/10 bg-[#111] text-white hover:border-white/30 hover:bg-white/[0.06]',
    ][$variant] ?? 'bg-white text-black hover:bg-gray-200';

    $sizeClasses = [
        'sm' => 'px-4 py-2 text-xs',
        'md' => 'px-6 py-3 text-sm',
        'lg' => 'px-7 py-3.5 text-sm',
    ][$size] ?? 'px-6 py-3 text-sm';
@endphp

@if ($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses]) }}
    >
        {{ $slot }}
    </button>
@endif

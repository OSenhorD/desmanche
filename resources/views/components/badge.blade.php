@props([
    'icon' => null,
    'type' => 'success',
])
@php
    $types = [
        'success' => 'bg-green-500/10 text-green-400',
        'error' => 'bg-red-500/10 text-red-400',
        'warning' => 'bg-yellow-500/10 text-yellow-400',
        'info' => 'bg-blue-500/10 text-blue-400',
    ];

    $classes = $types[$type] ?? $types['success'];
@endphp

<span
    {{
        $attributes->class([
            'inline-flex items-center gap-1 rounded-md px-2 py-1 text-xs font-medium',
            $classes
        ])
    }}
    >
    @if($icon)
        <x-dynamic-component :component="$icon" class="w-3 h-3" />
    @endif

    {{ $slot }}
</span>
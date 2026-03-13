<span
    {{
        $attributes->class([
            'inline-flex items-center gap-1 rounded-md px-2 py-1 text-xs font-medium',
            $class,
            $type->color(),
        ])
    }}
    >
    @if($icon)
        <x-dynamic-component :component="$icon" class="w-3 h-3" />
    @endif

    {{ $slot }}
</span>
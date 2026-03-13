@props([
    'title',
    'value',
    'growValue' => '...',
    'growColor' => 'text-gray-500',
    'iconName' => 'heroicon-o-chart-bar',
    'iconColor' => 'text-yellow-500',
])

<div class="flex justify-between items-center p-4 shadow rounded-xl bg-gray-900">
    <div>
        <p class="text-sm text-gray-300">
            {{ $title }}
        </p>

        <p class="text-xl font-bold text-white">
            {{ $value }}
        </p>

        <p class="text-sm {{ $growColor }}">
            {{ $growValue }}
        </p>
    </div>

    <x-dynamic-component :component="$iconName" class="h-6 w-6 {{ $iconColor }}" />
</div>

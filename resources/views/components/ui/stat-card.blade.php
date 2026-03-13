<x-filament::card>
    <div class="flex justify-between items-center">
        <div>
            <p class="text-sm text-gray-500 dark:text-gray-300">
                {{ $title }}
            </p>

            <p class="text-xl font-bold">
                {{ $value }}
            </p>

            <p class="text-sm {{ $growColor }}">
                {{ $growValue }}
            </p>
        </div>

        <x-dynamic-component :component="$iconName" class="h-6 w-6 {{ $iconColor }}" />
    </div>
</x-filament::card>
<div>
    <div class="flex justify-between items-center">
        <div class="space-y-1">
            <div class="text-base font-semibold">
                {{ $title }}
            </div>
            <div class="text-xs text-gray-500">
                {{ $subtitle }}
            </div>
        </div>

        @isset($headerRight)
            {{ $headerRight }}
        @endisset
    </div>

    <div class="mt-4 space-y-4">
        {{ $slot }}
    </div>
</div>
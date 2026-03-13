<div class="space-y-6">
    <x-filament::section>
        <x-slot name="heading">
            Testar API Mercado Livre
        </x-slot>

        <div class="space-y-4">
            <div>
                <x-filament::input.wrapper>
                    <x-filament::input type="text" wire:model="token" placeholder="Access Token" />
                </x-filament::input.wrapper>
            </div>

            <div class="flex gap-3">
                <x-filament::button wire:click="$dispatch('ml-users-me')">
                    /users/me
                </x-filament::button>

                <x-filament::button wire:click="$dispatch('ml-sites')">
                    /sites
                </x-filament::button>

                <x-filament::button wire:click="$dispatch('ml-listing-types')">
                    /sites/MLB/listing_types
                </x-filament::button>
            </div>
        </div>
    </x-filament::section>

    <x-filament::section>
        <x-slot name="heading">
            Resposta
        </x-slot>

        <pre class="text-xs overflow-auto bg-gray-900 text-green-400 p-4 rounded">
            {{ json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
        </pre>
    </x-filament::section>
</div>
<x-filament-panels::page>
    <div class="grid grid-cols-12 max-w-300 gap-6 px-4 py-6 md:px-6 lg:py-8">
        <section class="col-span-12 md:col-span-4 space-y-6">
            <x-pages.integrations.mercadolivre.conection />
            <!-- <x-pages.integrations.mercadolivre.environment /> -->
        </section>

        <section class="col-span-12 md:col-span-8 space-y-6">
            <x-pages.integrations.mercadolivre.sync-status />
            <x-pages.integrations.mercadolivre.credentials />
            <x-pages.integrations.mercadolivre.webhook />
            <x-pages.integrations.mercadolivre.settings-sync />
            <x-pages.integrations.mercadolivre.settings-price />
            <x-pages.integrations.mercadolivre.settings-notifications />
        </section>
    </div>
</x-filament-panels::page>
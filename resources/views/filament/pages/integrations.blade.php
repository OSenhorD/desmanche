<x-filament-panels::page>
    <div class="grid grid-cols-12 gap-6">
        <section class="col-span-12 md:col-span-4 space-y-6">
            <x-pages.integrations.mercadolivre.conection />
        </section>

        <section class="col-span-12 md:col-span-8 space-y-6">
            <x-pages.integrations.mercadolivre.sync-status />
        </section>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <x-pages.integrations.mercadolivre.credentials />
        <x-pages.integrations.mercadolivre.webhook />
        <x-pages.integrations.mercadolivre.settings-price />
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <x-pages.integrations.mercadolivre.settings-sync />
        <x-pages.integrations.mercadolivre.settings-notifications />
    </div>

    <div class="mt-6">
        <x-pages.integrations.mercadolivre.test-conection :response="$response" />
    </div>
</x-filament-panels::page>
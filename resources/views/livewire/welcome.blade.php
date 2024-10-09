<div>
    <!-- HEADER -->
    <x-header title="Hello, kak {{ auth()->user()->name }}" separator progress-indicator>
        <x-slot:middle class="!justify-end">
            <x-input placeholder="Search..." wire:model.live.debounce="search" clearable icon="o-magnifying-glass" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button label="Filters" @click="$wire.drawer = true" responsive icon="o-funnel" class="btn-primary" />
        </x-slot:actions>
    </x-header>

    <!-- Statistic  -->
    <div class="flex flex-row gap-4 mb-6">
        <x-stat title="Pesan" class="border border-blue-500 rounded-lg shadow-xl" value="44" icon="o-envelope" tooltip="Halo" />

        <x-stat
            title="Sales"
            description="This month"
            value="22.124"
            icon="o-arrow-trending-up"
            tooltip-bottom="There"
            class="border border-blue-500 rounded-lg shadow-xl"/>
    </div>

    {{-- End Statistic --}}

    <x-icon name="c-calendar-date-range" class="w-9 h-9 text-green-500 text-2xl" label="Jadwal Hari Ini" />

    {{-- Tabel Jadwal --}}
    @php
        $users = App\Models\User::all();

        $headers = [
        ['key' => 'name', 'label' => 'Name'],
        ['key' => 'city.name', 'label' => 'City'],
    ];
@endphp

    {{-- Notice `no-headers` --}}
    <x-table :headers="$headers" :rows="$users" no-headers no-hover />
    {{-- End Tabel Jadwal --}}

    <!-- FILTER DRAWER -->
    <x-drawer wire:model="drawer" title="Filters" right separator with-close-button class="lg:w-1/3">
        <x-input placeholder="Search..." wire:model.live.debounce="search" icon="o-magnifying-glass" @keydown.enter="$wire.drawer = false" />

        <x-slot:actions>
            <x-button label="Reset" icon="o-x-mark" wire:click="clear" spinner />
            <x-button label="Done" icon="o-check" class="btn-primary" @click="$wire.drawer = false" />
        </x-slot:actions>
    </x-drawer>
</div>

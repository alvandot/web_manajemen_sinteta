<div class="max-w-sm mx-auto mt-10 rounded-lg">
    <x-form wire:submit="login" class="space-y-4 ">
        <x-input
            label="E-mail"
            wire:model="email"
            icon="o-envelope"
            class="bg-white border-b border-gray-300 focus:border-primary-500 transition-all duration-300"
            placeholder="Masukkan email Anda"
        />
        <x-input
            label="Password"
            wire:model="password"
            type="password"
            icon="o-key"
            class="bg-white border-b border-gray-300 focus:border-primary-500 transition-all duration-300"
            placeholder="Masukkan password Anda"
        />

        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-between sm:space-y-0 mt-8">
            <x-button
                label="Masuk"
                type="submit"
                icon="o-paper-airplane"
                class="btn-primary w-full sm:w-auto px-8 py-3 rounded-full text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300"
                spinner="login"
            />
        </div>
    </x-form>
</div>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">

    {{-- NAVBAR mobile only --}}
    <x-nav sticky class="lg:hidden">
        <x-slot:brand>
            <x-app-brand />
        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden me-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
        </x-slot:actions>
    </x-nav>

    {{-- MAIN --}}
    <x-main full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">

            {{-- BRAND --}}
            <x-app-brand class="py-5" />

            {{-- MENU --}}
            <x-menu activate-by-route>

                {{-- User --}}
                @if($user = auth()->user())
                    <x-menu-separator />
                    <x-list-item :item="$user" no-separator no-hover>
                        <x-slot:avatar>
                            <x-badge value="{{ $user->getRoleNames()->implode(', ') }}" class="badge-primary" />
                        </x-slot:avatar>
                        <x-slot:value>
                            {{ $user->name }}
                        </x-slot:value>
                        <x-slot:actions>
                            <x-button icon="o-x-mark" class="text-red-500" wire:click="logout" spinner tooltip="Logout" />
                        </x-slot:actions>
                    </x-list-item>

                    <x-menu-separator />
                @endif

                <x-menu-item title="Dashboard" icon="o-bars-3" link="/" />
                <x-menu-sub title="Tentor Bimbel" icon="o-user-group">
                    <x-menu-item title="Daftar Tentor" icon="o-users" link="####" />
                    <x-menu-item title="Jadwal Mengajar" icon="o-calendar" link="####" />
                    <x-menu-item title="Evaluasi Kinerja" icon="o-chart-bar" link="####" />
                    <x-menu-item title="Materi Ajar" icon="o-book-open" link="####" />
                    <x-menu-item title="Absensi Tentor" icon="o-document-text" link="####" />
                </x-menu-sub>
                <x-menu-sub title="Siswa Bimbel" icon="o-academic-cap">
                    <x-menu-item title="Daftar Siswa" icon="o-users" link="####" />
                    <x-menu-item title="Jadwal Belajar" icon="o-calendar" link="####" />
                    <x-menu-item title="Absensi Siswa" icon="o-clipboard-document-list" link="####" />
                    <x-menu-item title="Daftar Sekolah" icon="o-chat-bubble-left-right" link="####" />
                </x-menu-sub>
                <x-menu-sub title="Akademik" icon="o-academic-cap">
                    <x-menu-item title="Mata Pelajaran" icon="o-clipboard-document-list" link="####" />
                    <x-menu-item title="Jadwal Bimbingan" icon="o-calendar" link="####" />
                    <x-menu-item title="Evaluasi Belajar" icon="o-chart-bar" link="####" />
                </x-menu-sub>
            </x-menu>
        </x-slot:sidebar>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased bg-gradient-to-br from-blue-600  to-yellow-300 animate-gradient">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-md p-8 rounded-2xl border-2 border-white/20 shadow-2xl backdrop-blur-sm bg-white/10">
            <div class="mb-6 text-center transform hover:scale-105 transition-transform duration-300">
                <x-app-brand />
            </div>

            <div class="transition-all duration-300 hover:translate-y-[-5px]">
                {{ $slot }}
            </div>

            @if (isset($footer))
                <div class="mt-8 text-center text-sm text-white/80 hover:text-white transition-colors duration-300">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>

    {{--  TOAST area --}}
    <x-toast />
</body>
</html>

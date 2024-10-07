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
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="mb-4 text-center">
                <x-app-brand />
            </div>


            {{ $slot }}

            @if (isset($footer))
                <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>

    {{--  TOAST area --}}
    <x-toast />
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body class="bg-neutral-900 text-white">
    <livewire:layout.header />
    <main class="max-w-[85rem] w-full mx-auto px-4 my-8">
        {{ $slot }}
    </main>
    @livewireScripts
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <style>
        th,
        td {
            border-width: 1px;
        }

        td {
            padding: 0.8em;


        }

        input,
        select {
            width: 100%;
        }
    </style>
    @stack('styles')
    <livewire:styles />
    <title>{{config('app.name')}}</title>
</head>

<body>
    <x-mobile-header />
    <div class="flex w-screen min-h-screen">
        <x-side-bar />
        <div class="w-full">
            <h1 class="ml-16 text-2xl font-bold mt-14">{{ $nome }}</h1>
            {{ $slot }}
        </div>
    </div>
    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')

</body>

</html>

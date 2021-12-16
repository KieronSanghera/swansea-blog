<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <html lang-"en">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content='ie=edge'>
        <title>Swansea Blog - @yield('title')</title>
    </head>

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    
    <div class="min-h-screen pb-6 bg-gray-100">
        @include('layouts.navigation')

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <body>

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            @if ($errors->any())
                <div>
                    Errors:
                    <ul>
                        @foreach ($errors->all() as $error)

                            <li> {{ $error }} </li>

                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                @yield('content')
            </div>

        </body>

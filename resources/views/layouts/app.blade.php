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
<body class="font-sans antialiased" >
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<body>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div>
        @yield('content')
    </div>

</body>
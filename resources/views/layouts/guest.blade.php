<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="ทะเบียนนักศึกษา - สกร.ระดับเขตพระนคร, การเรียนการสอน, ตารางสอบ สกร.ระดับเขตพระนคร, นักศึกษา สกร.ระดับเขตพระนคร, ผลการเรียน สกร.ระดับเขตพระนคร">
        <meta name="robots" content="ทะเบียนนักศึกษา - สกร.ระดับเขตพระนคร, การเรียนการสอน, ตารางสอบ สกร.ระดับเขตพระนคร, นักศึกษา สกร.ระดับเขตพระนคร, ผลการเรียน สกร.ระดับเขตพระนคร">
        <title>{{ config('app.name', 'งานการศึกษาพื้นฐาน-สกร.ระดับเขตพระนคร') }}</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/logo.png');}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900 background-animate bg-gradient-to-r from-purple-500 via-violet-800 to-purple-500">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 dark:bg-gray-800 shadow-none overflow-hidden sm:rounded-lg  bg-white bg-opacity-60 rounded-2xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

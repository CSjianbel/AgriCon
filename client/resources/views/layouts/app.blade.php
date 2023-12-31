<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('AppCon', 'AgriCon') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-100">

    <div class="w-full sm:w-[500px] h-full bg-[#FDFDFD] m-auto p-0">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

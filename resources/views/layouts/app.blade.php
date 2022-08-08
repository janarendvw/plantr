<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body class="subpixel-antialiased">
    <!-- Sidebar -->
    <div class="bottom-0 w-full md:w-auto sidenav p-3 flex md:flex-col justify-center align-center md:h-full">
        <div class="bg-white shadow w-full rounded-xl flex md:flex-col flex-row p-3 justify-evenly gap-3 py-3 items-center">
            <a href="{{ route('dashboard') }}">
                <span
                    class="material-symbols-rounded menu-item {{ request()->route()->named('dashboard')? 'menu-item-active': '' }}">Dashboard</span>
            </a>
            <a href="{{ route('statistics') }}">
                <span
                    class="material-symbols-rounded menu-item {{ request()->route()->named('statistics')? 'menu-item-active': '' }}">Bar_Chart</span>
            </a>
            <a href="{{ route('plants') }}">
                <span
                    class="material-symbols-rounded menu-item {{ request()->route()->named('plants')? 'menu-item-active': '' }}">Potted_Plant</span>
            </a>
            <a>
                <span
                    class="material-symbols-rounded menu-item {{ request()->route()->named('profile')? 'menu-item-active': '' }}">Person</span>
            </a>
            <a>
                <span
                    class="material-symbols-rounded menu-item {{ request()->route()->named('settings')? 'menu-item-active': '' }}">Settings</span>
            </a>
        </div>
    </div>
    <!-- Content -->
    <div class="content w-auto p-3 mx-4 md:mx-24 my-10 flex flex-col justify-center align-center">
        @yield('content')
    </div>
</body>
</html>

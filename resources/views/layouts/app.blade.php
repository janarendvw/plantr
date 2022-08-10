<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />
    @vite('resources/js/app.js')
    <title>@yield('page-title', config('app.name'))</title>
</head>

<body class="subpixel-antialiased dark:bg-slate-900 dark:text-white/75">
    <!-- Sidebar -->
    <div class="bottom-0 w-full md:w-auto sidenav p-1 flex md:flex-col justify-center items-center md:h-full">
        <div class="w-full rounded-full flex md:flex-col flex-row px-2 pt-2 pb-2 justify-evenly gap-5 items-center dark:text-white/75">
            <a
                href="{{ route('dashboard') }}"
                class="flex md:flex-row items-center flex-col-reverse gap-2">
                <span class="menu-indicator md:h-4 md:w-1 w-4 h-1 {{ request()->route()->named('dashboard')? 'menu-indicator-active': '' }}"></span>
                <span
                    class="material-symbols-rounded {{ request()->route()->named('dashboard')? 'dark:text-white': '' }}"
                >Dashboard
                </span>
            </a>
            <a
                href="{{ route('statistics') }}"
                class="flex md:flex-row items-center flex-col-reverse gap-2">
                <span class="menu-indicator md:h-4 md:w-1 w-4 h-1 {{ request()->route()->named('statistics')? 'menu-indicator-active': '' }}"></span>
                <span
                    class="material-symbols-rounded {{ request()->route()->named('statistics')? 'dark:text-white': '' }}">Insights</span>

            </a>
            <a
                href="{{ route('plants') }}"
                class="flex md:flex-row items-center flex-col-reverse gap-2">
                <span class="menu-indicator md:h-4 md:w-1 w-4 h-1 {{ request()->route()->named('plants')? 'menu-indicator-active': '' }}"></span>
                <span
                    class="material-symbols-rounded {{ request()->route()->named('plants')? 'dark:text-white': '' }}">Potted_Plant</span>

            </a>
            <a
                href="{{ route('profile') }}"
                class="flex md:flex-row items-center flex-col-reverse gap-2">
                <span class="menu-indicator md:h-4 md:w-1 w-4 h-1 {{ request()->route()->named('profile')? 'menu-indicator-active': '' }}"></span>
                <span
                    class="material-symbols-rounded {{ request()->route()->named('profile')? 'dark:text-white': '' }}">Person</span>

            </a>
            <a
                href="{{ route('settings') }}"
                class="flex md:flex-row items-center flex-col-reverse gap-2">
                <span class="menu-indicator md:h-4 md:w-1 w-4 h-1 {{ request()->route()->named('settings')? 'menu-indicator-active': '' }}"></span>
                <span
                    class="material-symbols-rounded {{ request()->route()->named('settings')? 'dark:text-white': '' }}">Settings</span>

            </a>
        </div>
    </div>
    <!-- Content -->
    <div class="content w-auto p-3 mx-4 md:mx-24 my-10 flex flex-col justify-center align-center">
        @yield('content')
    </div>
</body>
</html>

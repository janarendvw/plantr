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
    <div class="sidenav w-auto p-3 flex flex-col justify-center">
        <div class="shadow rounded-full flex flex-col p-2 jusify-center gap-3 pt-4">
            <a>
                <span class="material-symbols-rounded menu-item">Dashboard</span>
            </a>
            <a>
                <span class="material-symbols-rounded menu-item">Person</span>
            </a>
            <a>
                <span class="material-symbols-rounded menu-item">Bar_Chart</span>
            </a>
            <a>
                <span class="material-symbols-rounded menu-item">Settings</span>
            </a>
        </div>
    </div>
@yield('content')
</body>
</html>

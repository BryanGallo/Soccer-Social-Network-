<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>SOCIAL SOCCER</title>
</head>

<body class="">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1>Social Soccer</h1>
            <nav class="flex gap-2 items-center">
                <a href="#" class="font-bold uppercase text-gray-600 text-sm flex gap-2 items-center">Login</a>
                <a href="" class="font-bold uppercase text-gray-600 text-sm flex gap-2 items-center">Crear
                    Cuenta</a>
            </nav>

        </div>

    </header>
    <h1>@yield('titulo')</h1>

    <hr>

    @yield('contenido')
</body>

</html>

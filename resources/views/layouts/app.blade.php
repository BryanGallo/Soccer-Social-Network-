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
            <h1 class="text-3xl font-black">Social Soccer</h1>
            <nav class="flex gap-2 items-center">
                <a href="#" class="font-bold uppercase text-gray-600 text-sm ">Login</a>
                <a href="/crear-cuenta" class="font-bold uppercase text-gray-600 text-sm ">Crear
                    Cuenta</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10 ">
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        @yield('contenido')
    </main>
    <footer class="text-center font-bold text-gray-500 uppercase">
        {{-- usando codigo php con llaves --}}
        {{-- Todos los derechos reservados {{ date('Y') }} --}}
        {{-- usando directivas de laravel --}}
        Todos los derechos reservados {{ now()->year }}
    </footer>

</body>

</html>

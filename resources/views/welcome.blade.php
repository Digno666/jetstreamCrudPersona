<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Aquí va tu CSS de Tailwind */
        </style>
    @endif
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">TECNOLOGÍA WEB INF513 CC</h1>
        <p class="text-gray-600 mb-6">Bienvenido a la aplicación. Inicia sesión o regístrate para continuar.</p>
        <p class="text-gray-600 mb-6">Para iniciar sesion y realizar las pruebas del Crud Persona, puede realizarlo con la siguiente cuenta:</p>
        <p class="text-gray-600 mb-6">Correo electronico: usuario@gmail.com</p>
        <p class="text-gray-600 mb-6">Contraseña: 123456789</p>
        
        @if (Route::has('login'))
            <nav class="flex flex-col space-y-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="block rounded-md bg-[#FF2D20] text-white px-4 py-2 transition hover:bg-[#e0241d]">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block rounded-md bg-gray-800 text-white px-4 py-2 transition hover:bg-gray-700">
                        INICIAR SESION
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block rounded-md border border-gray-300 text-gray-800 px-4 py-2 transition hover:bg-gray-100">
                            REGISTRAR
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>

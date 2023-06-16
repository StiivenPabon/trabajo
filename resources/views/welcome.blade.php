<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu página de inicio</title>
    <!-- Agrega aquí la referencia a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col items-center  flex flex-col items-center justify-center min-h-screen">
        @if (Route::has('login'))
            <div class="flex flex-col items-center">
                <h1 class="text-4xl font-bold mb-8">¡Bienvenido!</h1>
                <p class="text-lg text-gray-500 mb-8">Aqui podras registrar productos con categorias y subcategorias </p>
                @auth
                    <a href="{{ url('/home') }}" class="text-blue-500 hover:text-blue-700">Inicio</a>
                @else
                    <div class="mb-4">
                        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar sesión</a>
                    </div>

                    @if (Route::has('register'))
                        <div class="mb-4">
                            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2"> Registrarse </a>
                        </div>
                    @endif
                @endauth
            </div>
        @endif

        <div class="text-center">
           

            {{-- <div class="flex flex-col items-center">
               
              
            </div> --}}
        </div>
    </div>

    <footer class="mt-8 text-center text-sm text-gray-500">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>
</html>

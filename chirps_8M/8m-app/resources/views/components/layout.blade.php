<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '8M-Chirper' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-700 text-white p-4 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-extrabold tracking-widest uppercase text-white drop-shadow">chirps-8M</h1>
            <div class="flex items-center gap-6">
                @auth
                    <span class="text-lg font-bold bg-white text-blue-700 px-4 py-1 rounded-full shadow border-2 border-blue-300">{{ auth()->user()->name }}</span>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" class="ml-4 bg-fuchsia-600 hover:bg-fuchsia-700 text-white font-bold px-5 py-2 rounded-full shadow transition-all duration-200 border-2 border-fuchsia-300 focus:outline-none focus:ring-2 focus:ring-fuchsia-400">Cerrar Sesión</button>
                    </form>
                @else
                    <a href="/login" class="text-white hover:text-gray-200 text-sm">Iniciar Sesión</a>
                    <a href="/register" class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-100 text-sm font-semibold">Registrarse</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Success Toast -->
    @if (session('success'))
        <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50">
            <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-out">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </div>
    @endif

    <main class="py-8">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="max-w-4xl mx-auto text-center">
            <p>&copy; {{ date('Y') }} 8M-Chirper</p>
        </div>
    </footer>
</body>
</html>

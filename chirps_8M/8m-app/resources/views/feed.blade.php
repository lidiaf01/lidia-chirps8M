<x-layout>
    <x-slot:title>
        8M Memes Creativos
    </x-slot:title>

    <div class="max-w-4xl mx-auto px-4 py-8 min-h-screen bg-white rounded-3xl shadow-2xl border-4 border-blue-200">
        <h1 class="text-5xl font-extrabold text-blue-700 drop-shadow mb-10 text-center transition-colors duration-500 hover:text-fuchsia-600">
            Galería de Memes 8M
        </h1>

        <!-- Meme Form -->
        <div class="bg-blue-50 shadow-xl rounded-2xl p-8 mt-8 border-2 border-blue-200">
            <form method="POST" action="/memes">
                @csrf
                <div class="mb-6">
                    <label for="meme_texto" class="block text-lg font-bold text-blue-700 mb-2">Texto del Meme</label>
                    <input
                        type="text"
                        name="meme_texto"
                        id="meme_texto"
                        placeholder="Escribe aquí tu meme más ingenioso"
                        class="w-full px-6 py-3 border-2 border-blue-300 rounded-xl focus:ring-4 focus:ring-blue-200 focus:border-blue-500 text-lg font-semibold bg-white @error('meme_texto') border-red-500 @enderror transition-all duration-200 hover:scale-105"
                        value="{{ old('meme_texto') }}"
                        required
                    />
                    @error('meme_texto')
                        <p class="mt-2 text-sm text-red-500 font-bold animate-bounce">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="explicacion" class="block text-lg font-bold text-fuchsia-700 mb-2">Explicación</label>
                    <textarea
                        name="explicacion"
                        id="explicacion"
                        placeholder="¿Por qué este meme es relevante para el 8M?"
                        class="w-full px-6 py-3 border-2 border-fuchsia-300 rounded-xl resize-none focus:ring-4 focus:ring-fuchsia-200 focus:border-fuchsia-500 text-lg font-semibold bg-white @error('explicacion') border-red-500 @enderror transition-all duration-200 hover:scale-105"
                        rows="4"
                        maxlength="1000"
                        required
                    >{{ old('explicacion') }}</textarea>
                    @error('explicacion')
                        <p class="mt-2 text-sm text-red-500 font-bold animate-bounce">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-fuchsia-600 text-white font-extrabold py-3 px-10 rounded-xl shadow-lg text-xl tracking-wider transform hover:scale-105 transition-all duration-200">
                        Publicar Meme
                    </button>
                </div>
            </form>
        </div>

        <!-- Feed -->
        <div class="space-y-10 mt-12 flex flex-col items-center">
            @forelse ($memes as $meme)
                <x-meme :meme="$meme" />
            @empty
                <div class="hero py-16">
                    <div class="hero-content text-center">
                        <div>
                            <svg class="mx-auto h-16 w-16 opacity-40 text-blue-400 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <p class="mt-6 text-lg text-blue-700/70 font-bold animate-pulse">¡No hay memes todavía! Sé el primero en subir uno.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>

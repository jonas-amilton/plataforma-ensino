<div class="max-w-sm rounded overflow-hidden shadow-lg dark:bg-gray-800">
    <!-- Imagem do card -->
    <img class="w-full" src="{{ asset($image) }}" alt="Imagem Demo">

    <div class="px-6 py-4">
        <!-- Título do card -->
        <div class="font-bold text-xl mb-2 dark:text-gray-200">{{ $title }}</div>
        <p class="dark:text-red-400 text-base">
            {{ $content }}
        </p>
        <p class="mt-3">
            <a type="button" href="{{ $href }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Acessar
            </a>
        </p>
    </div>
</div>

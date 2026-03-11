<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#0b0e14] p-8 text-gray-300 font-sans">
    <div class="max-w-6xl mx-auto space-y-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white tracking-tight">
                Categoria de Produtos
            </h1>

            <a href="{{ route('web.admin.categories.create') }}"
                class="flex items-center gap-2 bg-[#1bc4a8] hover:bg-[#18ae96] text-[#0b0e14] font-bold py-2 px-6 rounded-lg transition-all shadow-lg text-sm">
                <span class="text-lg">+</span> Nova Categoria
            </a>
        </div>

        @if(session('success'))
            <p style="color:green">
                {{ session('success') }}
            </p>
        @endif

        <!-- Filtro -->
        <div class="flex gap-4">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" placeholder="Buscar veículo..."
                    class="w-full bg-[#161a21] border border-[#1bc4a8]/40 text-gray-300 text-sm rounded-lg focus:ring-[#1bc4a8] focus:border-[#1bc4a8] block pl-10 p-2.5 outline-none transition-all placeholder-gray-600">
            </div>

            <button
                class="flex items-center gap-2 bg-[#1c222c] hover:bg-[#252c38] text-gray-400 font-medium py-2 px-4 rounded-lg border border-gray-800 transition-all text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                Filtros
            </button>
        </div>

        <div class="bg-[#161a21] rounded-lg shadow-2xl border border-gray-800 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-gray-400 uppercase text-[10px] tracking-widest border-b border-gray-800">
                        <th class="px-6 py-4 font-semibold">ID</th>
                        <th class="px-6 py-4 font-semibold">Nome</th>
                        <th class="px-6 py-4 font-semibold text-right">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-sm divide-y divide-gray-800/50">
                    @foreach($categories as $category)
                        <tr class="hover:bg-[#1c222c] transition-colors">
                            <td class="px-6 py-4 text-gray-500 font-mono">
                                {{ $category->id }}
                            </td>

                            <td class="px-6 py-4 text-gray-500 font-mono">
                                {{ $category->name }}
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <a href="{{ route('web.admin.categories.edit', $category) }}">
                                        <i class="fa-solid fa-pen text-blue-500"></i>
                                    </a>

                                    <form method="POST" action="{{ route('api.admin.categories.destroy', $category) }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            <i class="fa-regular fa-trash-can text-red-500"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

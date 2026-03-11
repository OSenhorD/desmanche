<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Categoria</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#0b0e14] p-8 text-gray-300 font-sans antialiased">
    <div class="max-w-xl mx-auto mt-12">
        
        <a href="{{ route('web.admin.categories.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-[#1bc4a8] transition-all mb-6 text-sm group">
            <i class="fa-solid fa-arrow-left transition-transform group-hover:-translate-x-1"></i>
            Voltar para listagem
        </a>

        <div class="bg-[#161a21] rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-gray-800/50 p-10 relative overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#1bc4a8] to-transparent opacity-50"></div>

            <div class="mb-10">
                <span class="text-[#1bc4a8] text-xs font-bold uppercase tracking-widest bg-[#1bc4a8]/10 px-3 py-1 rounded-full">Modo Edição</span>
                <h1 class="text-3xl font-extrabold text-white tracking-tight mt-4">Editar Categoria</h1>
                <p class="text-gray-500 text-sm mt-2">ID do registro: <span class="text-gray-400 font-mono">#{{ $category->id }}</span></p>
            </div>

            @if ($errors->any())
                <div class="mb-8 p-4 bg-red-500/10 border-l-4 border-red-500 rounded-r-lg">
                    <div class="flex items-center gap-3 mb-2">
                        <i class="fa-solid fa-circle-exclamation text-red-500"></i>
                        <span class="text-red-500 font-bold text-sm">Ajuste os campos abaixo:</span>
                    </div>
                    <ul class="text-red-400/80 text-xs space-y-1 ml-7">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('api.admin.categories.update', $category) }}" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="space-y-3">
                    <label for="name" class="block text-[11px] font-black text-gray-400 uppercase tracking-[0.2em] ml-1">
                        Nome da Categoria
                    </label>
                    <div class="group relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-600 group-focus-within:text-[#1bc4a8] transition-colors">
                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                        </div>
                        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required
                            placeholder="Ex: Lataria, Motores..."
                            class="w-full bg-[#0b0e14]/50 border border-gray-800 group-focus-within:border-[#1bc4a8] group-focus-within:ring-1 group-focus-within:ring-[#1bc4a8] text-gray-100 rounded-xl py-4 pl-11 pr-4 outline-none transition-all shadow-inner">
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" 
                        class="w-full bg-[#1bc4a8] hover:bg-[#18ae96] hover:scale-[1.02] active:scale-[0.98] text-[#0b0e14] font-black py-4 rounded-xl transition-all shadow-[0_10px_20px_rgba(27,196,168,0.2)] text-sm uppercase tracking-widest">
                        Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
</body>

</html>
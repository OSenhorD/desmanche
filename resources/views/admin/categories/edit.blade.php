<!DOCTYPE html>
<html>

<head>
    <title>Editar Categoria</title>
</head>

<body>
    <h1>Editar Categoria</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('api.admin.categories.update', $category) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Nome</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}">
        </div>

        <br>

        <button type="submit">
            Atualizar
        </button>
    </form>

    <a href="{{ route('web.admin.categories.index') }}">
        Voltar
    </a>
</body>

</html>
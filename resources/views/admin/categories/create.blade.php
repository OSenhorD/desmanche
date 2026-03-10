<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Categoria</title>
</head>

<body>
    <h1>Cadastrar Categoria</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('api.admin.categories.store') }}">
        @csrf

        <div>
            <label for="name">Nome da Categoria</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <br>

        <button type="submit">
            Salvar
        </button>
    </form>

    <a href="{{ route('web.admin.categories.index') }}">
        Voltar
    </a>
</body>

</html>
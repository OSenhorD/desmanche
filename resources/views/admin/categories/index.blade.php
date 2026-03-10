<h1>Categorias</h1>

<a href="{{ route('web.admin.categories.create') }}">
    Nova Categoria
</a>

@if(session('success'))
    <p style="color:green">
        {{ session('success') }}
    </p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>

            <td>
                <a href="{{ route('web.admin.categories.edit', $category) }}">
                    Editar
                </a>

                <form action="{{ route('api.admin.categories.destroy', $category) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>
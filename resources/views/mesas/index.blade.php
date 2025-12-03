<x-app-layout>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Mesas</title>
</head>
<body>

    <h1>Listagem de Mesas</h1>

    <a href="{{ route('mesas.create') }}">Cadastrar Mesa</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Lugares</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>

        @foreach ($mesas as $mesa)
        <tr>
            <td>{{ $mesa->id }}</td>
            <td>{{ $mesa->numero }}</td>
            <td>{{ $mesa->lugares }}</td>
            <td>{{ $mesa->status }}</td>
            <td>
                <a href="{{ route('mesas.edit', $mesa->id) }}">Editar</a>

                <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>
</x-app-layout>
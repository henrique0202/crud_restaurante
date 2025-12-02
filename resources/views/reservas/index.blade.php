<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Reservas</title>
</head>
<body>

    <h1>Listagem de Reservas</h1>

    <a href="{{ route('reservas.create') }}">Cadastrar Reserva</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Mesa</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Ações</th>
        </tr>

        @foreach ($reservas as $reserva)
        <tr>
            <td>{{ $reserva->id }}</td>
            <td>{{ $reserva->cliente_id }}</td>
            <td>{{ $reserva->mesa_id }}</td>
            <td>{{ $reserva->data }}</td>
            <td>{{ $reserva->hora }}</td>
            <td>
                <a href="{{ route('reservas.edit', $reserva->id) }}">Editar</a>

                <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
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
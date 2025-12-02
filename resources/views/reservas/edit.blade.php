<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Reserva</title>
</head>
<body>

    <h1>Editar Reserva</h1>

    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Cliente:</label><br>
        <select name="cliente_id">
            @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" 
                {{ $cliente->id == $reserva->cliente_id ? 'selected' : '' }}>
                {{ $cliente->nome }}
            </option>
            @endforeach
        </select><br><br>

        <label>Mesa:</label><br>
        <select name="mesa_id">
            @foreach ($mesas as $mesa)
            <option value="{{ $mesa->id }}"
                {{ $mesa->id == $reserva->mesa_id ? 'selected' : '' }}>
                Mesa {{ $mesa->numero }}
            </option>
            @endforeach
        </select><br><br>

        <label>Data:</label><br>
        <input type="date" name="data" value="{{ $reserva->data }}" required><br><br>

        <label>Hora:</label><br>
        <input type="time" name="hora" value="{{ $reserva->hora }}" required><br><br>

        <button type="submit">Atualizar</button>
    </form>

</body>
</html>

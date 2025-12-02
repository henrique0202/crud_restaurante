<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Reserva</title>
</head>
<body>

    <h1>Cadastrar Reserva</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf

        <label>Cliente:</label><br>
        <select name="cliente_id">
            @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select><br><br>

        <label>Mesa:</label><br>
        <select name="mesa_id">
            @foreach ($mesas as $mesa)
            <option value="{{ $mesa->id }}">Mesa {{ $mesa->numero }}</option>
            @endforeach
        </select><br><br>

        <label>Data:</label><br>
        <input type="date" name="data" required><br><br>

        <label>Hora:</label><br>
        <input type="time" name="hora" required><br><br>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>
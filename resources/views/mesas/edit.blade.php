<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>

    <h1>Editar Mesa</h1>

    <form action="{{ route('mesas.update', $mesa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Número da Mesa:</label><br>
        <input type="number" name="numero" value="{{ $mesa->numero }}" required><br><br>

        <label>Lugares:</label><br>
        <input type="number" name="lugares" value="{{ $mesa->lugares }}" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="livre" {{ $mesa->status == 'livre' ? 'selected' : '' }}>Livre</option>
            <option value="ocupada" {{ $mesa->status == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
            <option value="reservada" {{ $mesa->status == 'reservada' ? 'selected' : '' }}>Reservada</option>
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>

</body>
</html>
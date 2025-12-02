<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Mesa</title>
</head>
<body>

    <h1>Cadastrar Mesa</h1>

    <form action="{{ route('mesas.store') }}" method="POST">
        @csrf

        <label>Número da Mesa:</label><br>
        <input type="number" name="numero" required><br><br>

        <label>Lugares:</label><br>
        <input type="number" name="lugares" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="livre">Livre</option>
            <option value="ocupada">Ocupada</option>
            <option value="reservada">Reservada</option>
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>
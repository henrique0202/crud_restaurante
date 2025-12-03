<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>
    <h1>Novo Funcionário</h1>

    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Cargo:</label><br>
        <input type="text" name="cargo"><br><br>

        <label>Salário:</label><br>
        <input type="number" name="salario" step="0.01"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>
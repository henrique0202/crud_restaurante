<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>

    <h1>Editar Funcionário</h1>

    <form action="{{ route('funcionarios.update', $funcionario) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="nome" value="{{ $funcionario->nome }}"><br><br>

        <label>Cargo:</label><br>
        <input type="text" name="cargo" value="{{ $funcionario->cargo }}"><br><br>

        <label>Salário:</label><br>
        <input type="number" name="salario" value="{{ $funcionario->salario }}" step="0.01"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" value="{{ $funcionario->telefone }}"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>
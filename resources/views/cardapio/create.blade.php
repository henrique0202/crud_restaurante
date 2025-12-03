<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>
    <h1>Novo Item do Cardápio</h1>

    <form action="{{ route('cardapios.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="categoria"><br><br>

        <label>Preço:</label><br>
        <input type="number" name="preco" step="0.01"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('cardapios.index') }}">Voltar</a>
</body>
</html>
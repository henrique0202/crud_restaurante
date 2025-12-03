<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>
    <h1>Editar Item do Cardápio</h1>

    <form action="{{ route('cardapios.update', $cardapio) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="nome" value="{{ $cardapio->nome }}"><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="categoria" value="{{ $cardapio->categoria }}"><br><br>

        <label>Preço:</label><br>
        <input type="number" name="preco" value="{{ $cardapio->preco }}" step="0.01"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('cardapios.index') }}">Voltar</a>
</body>
</html>
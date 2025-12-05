<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>
    <h1>Novo Fornecedor</h1>

    <form action="{{ route('fornecedores.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Produto Fornecido:</label><br>
        <input type="text" name="produto_fornecido"><br><br>

        <label>CNPJ:</label><br>
        <input type="text" name="cnpj"><br><br>

        <label>Endereço:</label><br>
        <input type="text" name="endereco"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('fornecedores.index') }}">Voltar</a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Mesa</title>
</head>
<body>
    <h1>Editar Fornecedor</h1>

    <form action="{{ route('fornecedores.update', $fornecedor) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="nome" value="{{ $fornecedor->nome }}"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" value="{{ $fornecedor->telefone }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $fornecedor->email }}"><br><br>

        <label>Produto Fornecido:</label><br>
        <input type="text" name="produto_fornecido" value="{{ $fornecedor->produto_fornecido }}"><br><br>

        <label>CNPJ:</label><br>
        <input type="text" name="cnpj" value="{{ $fornecedor->cnpj }}"><br><br>

        <label>Endereço:</label><br>
        <input type="text" name="endereco" value="{{ $fornecedor->endereco }}"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('fornecedores.index') }}">Voltar</a>
</body>
</html>
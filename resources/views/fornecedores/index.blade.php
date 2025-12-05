<x-app-layout>
    <h1>Lista de Fornecedores</h1>

    <a href="{{ route('fornecedores.create') }}">Novo Fornecedor</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Produto Fornecido</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>

        @foreach($fornecedores as $fornecedor)
            <tr>
                <td>{{ $fornecedor->id }}</td>
                <td>{{ $fornecedor->nome }}</td>
                <td>{{ $fornecedor->telefone }}</td>
                <td>{{ $fornecedor->email }}</td>
                <td>{{ $fornecedor->produto_fornecido }}</td>
                <td>{{ $fornecedor->cnpj }}</td>
                <td>{{ $fornecedor->endereco }}</td>
                <td>
                    <a href="{{ route('fornecedores.edit', $fornecedor) }}">Editar</a>
                    |
                    <form action="{{ route('fornecedores.destroy', $fornecedor) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
<x-app-layout>
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>


    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif


    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                <a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
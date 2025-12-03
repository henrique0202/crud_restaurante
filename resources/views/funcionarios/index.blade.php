<x-app-layout>
    <h1>Listagem de Funcionários</h1>

    <a href="{{ route('funcionarios.create') }}">Novo Funcionário</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Ações</th>
        </tr>

        @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{ $funcionario->id }}</td>
                <td>{{ $funcionario->nome }}</td>
                <td>{{ $funcionario->cargo }}</td>
                <td>R$ {{ $funcionario->salario }}</td>
                <td>
                    <a href="{{ route('funcionarios.edit', $funcionario) }}">Editar</a>
                    |
                    <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
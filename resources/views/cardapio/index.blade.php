<x-app-layout>
    <h1>Listagem de Itens do Cardápio</h1>

    <a href="{{ route('cardapios.create') }}">Novo Item</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        @foreach($cardapios as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->categoria }}</td>
                <td>R$ {{ $item->preco }}</td>
                <td>
                    <a href="{{ route('cardapios.edit', $item) }}">Editar</a>
                    |
                    <form action="{{ route('cardapios.destroy', $item) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
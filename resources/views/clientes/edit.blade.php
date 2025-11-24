<x-app-layout>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('PUT')


        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}">


        <label>Telefone:</label>
        <input type="text" name="telefone" value="{{ $cliente->telefone }}">


        <label>Email:</label>
        <input type="email" name="email" value="{{ $cliente->email }}">


        <button type="submit">Atualizar</button>
    </form>
</x-app-layout>
<x-app-layout>
    <h1>Novo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">


        <label>Telefone:</label>
        <input type="text" name="telefone">


        <label>Email:</label>
        <input type="email" name="email">


        <button type="submit">Salvar</button>
    </form>
</x-app-layout>
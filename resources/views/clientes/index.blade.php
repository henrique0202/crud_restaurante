<x-app-layout>
    <div class="max-w-5xl mx-auto mt-10">

        <h1 class="text-3xl font-bold text-black mb-6">Lista de Clientes</h1>

        <a href="{{ route('clientes.create') }}"
            class="px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800 transition">
            Novo Cliente
        </a>

        @if(session('success'))
            <div class="mt-4 p-3 bg-green-100 text-green-800 border-l-4 border-green-500 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-x-auto bg-[#F5F5DC] p-4 shadow rounded-lg">
            <table class="min-w-full border border-black">
                <thead class="bg-black text-white">
                    <tr>
                        <th class="border border-white px-4 py-2 text-left">ID</th>
                        <th class="border border-white px-4 py-2 text-left">Nome</th>
                        <th class="border border-white px-4 py-2 text-left">Telefone</th>
                        <th class="border border-white px-4 py-2 text-left">Email</th>
                        <th class="border border-white px-4 py-2 text-left">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($clientes as $cliente)
                        <tr class="bg-white hover:bg-gray-100">
                            <td class="border border-black px-4 py-2">{{ $cliente->id }}</td>
                            <td class="border border-black px-4 py-2">{{ $cliente->nome }}</td>
                            <td class="border border-black px-4 py-2">{{ $cliente->telefone }}</td>
                            <td class="border border-black px-4 py-2">{{ $cliente->email }}</td>

                            <td class="border border-black px-4 py-2 space-x-3">
                                <a href="{{ route('clientes.edit', $cliente) }}"
                                    class="text-blue-600 hover:underline">
                                    Editar
                                </a>

                                <form action="{{ route('clientes.destroy', $cliente) }}"
                                      method="POST"
                                      class="inline-block"
                                      onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">
                                        Excluir
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
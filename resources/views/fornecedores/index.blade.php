<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10 bg-[#f5e6c8] p-8 rounded-xl shadow-lg">

        <h1 class="text-3xl font-bold text-black mb-6 text-center">Lista de Fornecedores</h1>

        <div class="flex justify-end mb-4">
            <a href="{{ route('fornecedores.create') }}"
                class="bg-black text-white px-4 py-2 rounded-md font-semibold 
                       hover:bg-white hover:text-black hover:border hover:border-black transition">
                Novo Fornecedor
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-black bg-white rounded-lg overflow-hidden">
                <thead class="bg-black text-white">
                    <tr>
                        <th class="p-2 border border-black">ID</th>
                        <th class="p-2 border border-black">Nome</th>
                        <th class="p-2 border border-black">Telefone</th>
                        <th class="p-2 border border-black">Email</th>
                        <th class="p-2 border border-black">Produto Fornecido</th>
                        <th class="p-2 border border-black">CNPJ</th>
                        <th class="p-2 border border-black">Endereço</th>
                        <th class="p-2 border border-black">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($fornecedores as $fornecedor)
                        <tr class="hover:bg-[#f5e6c8] transition">
                            <td class="p-2 border border-black text-center">{{ $fornecedor->id }}</td>
                            <td class="p-2 border border-black">{{ $fornecedor->nome }}</td>
                            <td class="p-2 border border-black">{{ $fornecedor->telefone }}</td>
                            <td class="p-2 border border-black">{{ $fornecedor->email }}</td>
                            <td class="p-2 border border-black">{{ $fornecedor->produto_fornecido }}</td>
                            <td class="p-2 border border-black">{{ $fornecedor->cnpj }}</td>
                            <td class="p-2 border border-black">{{ $fornecedor->endereco }}</td>

                            <td class="p-2 border border-black text-center">
                                <a href="{{ route('fornecedores.edit', $fornecedor) }}"
                                   class="text-black font-semibold hover:underline">Editar</a>

                                <form action="{{ route('fornecedores.destroy', $fornecedor) }}" 
                                      method="POST" 
                                      class="inline-block ml-2">
                                    @csrf
                                    @method('DELETE')

                                    <button 
                                        type="submit"
                                        class="text-red-600 font-semibold hover:underline">
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
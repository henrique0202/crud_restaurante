<x-app-layout>
    <div class="max-w-5xl mx-auto mt-10 bg-[#f5e6c8] p-8 rounded-xl shadow-lg">

        <h1 class="text-3xl font-bold text-black mb-6 text-center">Listagem de Funcionários</h1>
        @if(session('success'))
            <div style="padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('funcionarios.create') }}"
               class="bg-black text-white px-4 py-2 rounded-md font-semibold
                      hover:bg-white hover:text-black hover:border hover:border-black transition">
                Novo Funcionário
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-black bg-white rounded-lg overflow-hidden">
                <thead class="bg-black text-white">
                    <tr>
                        <th class="p-2 border border-black">ID</th>
                        <th class="p-2 border border-black">Nome</th>
                        <th class="p-2 border border-black">Cargo</th>
                        <th class="p-2 border border-black">Telefone</th>
                        <th class="p-2 border border-black">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($funcionarios as $funcionario)
                        <tr class="hover:bg-[#f5e6c8] transition">
                            <td class="p-2 border border-black text-center">{{ $funcionario->id }}</td>
                            <td class="p-2 border border-black">{{ $funcionario->nome }}</td>
                            <td class="p-2 border border-black">{{ $funcionario->cargo }}</td>
                             <td class="p-2 border border-black">{{ $funcionario->telefone }}</td>

                            <td class="p-2 border border-black text-center">
                                <a href="{{ route('funcionarios.edit', $funcionario) }}"
                                   class="text-black font-semibold hover:underline">
                                    Editar
                                </a>

                                <form action="{{ route('funcionarios.destroy', $funcionario) }}" 
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
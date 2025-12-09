<x-app-layout>

    <div class="max-w-5xl mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">

        <h1 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 mb-6">
            Listagem de Mesas
        </h1>
        @if(session('success'))
            <div style="padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('mesas.create') }}"
           class="inline-block mb-6 bg-yellow-200 text-black font-semibold px-4 py-2 rounded-lg hover:bg-yellow-300 transition">
            Cadastrar Mesa
        </a>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-black text-white">
                        <th class="px-4 py-3 text-left">ID</th>
                        <th class="px-4 py-3 text-left">Número</th>
                        <th class="px-4 py-3 text-left">Lugares</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Ações</th>
                    </tr>
                </thead>

                <tbody class="bg-yellow-50">
                    @foreach ($mesas as $mesa)
                    <tr class="border-b border-gray-300 hover:bg-yellow-100">
                        <td class="px-4 py-3">{{ $mesa->id }}</td>
                        <td class="px-4 py-3">{{ $mesa->numero }}</td>
                        <td class="px-4 py-3">{{ $mesa->lugares }}</td>
                        <td class="px-4 py-3">{{ $mesa->status }}</td>
                        <td class="px-4 py-3 flex items-center gap-3">

                            <a href="{{ route('mesas.edit', $mesa->id) }}"
                               class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                                Editar
                            </a>

                            <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition"
                                        onclick="return confirm('Tem certeza que deseja excluir?')">
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
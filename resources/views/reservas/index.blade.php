<x-app-layout>

    <div class="max-w-5xl mx-auto mt-10 bg-[#F5DEB3] p-6 rounded-lg shadow-lg">

        <h1 class="text-3xl font-bold text-black mb-6 text-center">Listagem de Reservas</h1>

        <div class="flex justify-end mb-4">
            <a 
                href="{{ route('reservas.create') }}"
                class="bg-black text-white px-4 py-2 rounded font-semibold hover:bg-[#F5DEB3] hover:text-black border border-black transition"
            >
                Cadastrar Reserva
            </a>
        </div>

        <table class="w-full bg-white rounded-lg shadow border border-black overflow-hidden">
            <thead class="bg-black text-white">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Cliente</th>
                    <th class="py-3 px-4 text-left">Mesa</th>
                    <th class="py-3 px-4 text-left">Data</th>
                    <th class="py-3 px-4 text-left">Hora</th>
                    <th class="py-3 px-4 text-center">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($reservas as $reserva)
                <tr class="border-b border-gray-300">
                    <td class="py-3 px-4">{{ $reserva->id }}</td>

                    <td class="py-3 px-4">
                        {{ $reserva->cliente->nome ?? 'cliente_id' }}
                    </td>

                    <td class="py-3 px-4">
                        Mesa {{ $reserva->mesa->numero ?? 'mesa_id' }}
                    </td>

                    <td class="py-3 px-4">{{ $reserva->data }}</td>
                    <td class="py-3 px-4">{{ $reserva->hora }}</td>

                    <td class="py-3 px-4 text-center flex items-center justify-center gap-3">

                        <a 
                            href="{{ route('reservas.edit', $reserva->id) }}"
                            class="text-black font-semibold underline hover:text-gray-700"
                        >
                            Editar
                        </a>

                        <form 
                            action="{{ route('reservas.destroy', $reserva->id) }}" 
                            method="POST"
                            onsubmit="return confirm('Tem certeza que deseja excluir?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit"
                                class="text-red-600 font-bold hover:text-red-800"
                            >
                                Excluir
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-app-layout>
<x-app-layout>

    <div class="max-w-3xl mx-auto bg-[#F5DEB3] p-6 rounded-lg shadow-lg mt-10">

        <h1 class="text-3xl font-bold text-black mb-6 text-center">
            Cadastrar Reserva
        </h1>

        <form action="{{ route('reservas.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="font-semibold text-black">Cliente:</label>
                <select 
                    name="cliente_id" 
                    class="w-full border border-black rounded p-2 bg-white"
                    required
                >
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="font-semibold text-black">Mesa:</label>
                <select 
                    name="mesa_id" 
                    class="w-full border border-black rounded p-2 bg-white"
                    required
                >
                    @foreach ($mesas as $mesa)
                        <option value="{{ $mesa->id }}">Mesa {{ $mesa->numero }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="font-semibold text-black">Data:</label>
                <input 
                    type="date" 
                    name="data" 
                    class="w-full border border-black rounded p-2 bg-white"
                    required
                >
            </div>

            <div>
                <label class="font-semibold text-black">Hora:</label>
                <input 
                    type="time" 
                    name="hora" 
                    class="w-full border border-black rounded p-2 bg-white"
                    required
                >
            </div>

            <div>
                <label class="font-semibold text-black">quantidade de pessoas:</label>
                <input 
                    type="number" 
                    name="quantidade_pessoas" 
                    class="w-full border border-black rounded p-2 bg-white"
                    required
                >
            </div>

            <div class="text-center">
                <button 
                    type="submit" 
                    class="bg-black text-white px-6 py-2 rounded font-semibold hover:bg-[#F5DEB3] hover:text-black border-2 border-black transition"
                >
                    Salvar
                </button>
            </div>

        </form>

    </div>

</x-app-layout>
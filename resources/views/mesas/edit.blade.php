<x-app-layout>

    <div class="max-w-xl mx-auto bg-[#F5DEB3] p-6 rounded-lg shadow-lg mt-10">

        <h1 class="text-3xl font-bold text-black mb-6 text-center">
            Editar Mesa
        </h1>

        <form action="{{ route('mesas.update', $mesa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="block font-semibold text-black mb-1">Número da Mesa:</label>
            <input 
                type="number" 
                name="numero" 
                value="{{ $mesa->numero }}" 
                required
                class="w-full border-2 border-black rounded p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-black"
            >

            <label class="block font-semibold text-black mb-1">Lugares:</label>
            <input 
                type="number" 
                name="lugares" 
                value="{{ $mesa->lugares }}" 
                required
                class="w-full border-2 border-black rounded p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-black"
            >

            <label class="block font-semibold text-black mb-1">Status:</label>
            <select 
                name="status" 
                class="w-full border-2 border-black rounded p-2 mb-6 bg-white focus:outline-none focus:ring-2 focus:ring-black"
            >
                <option value="livre" {{ $mesa->status == 'livre' ? 'selected' : '' }}>Livre</option>
                <option value="ocupada" {{ $mesa->status == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                <option value="reservada" {{ $mesa->status == 'reservada' ? 'selected' : '' }}>Reservada</option>
            </select>

            <button 
                type="submit" 
                class="w-full bg-black text-white font-semibold py-2 rounded hover:bg-[#F5DEB3] hover:text-black transition"
            >
                Atualizar
            </button>
        </form>

    </div>

</x-app-layout>
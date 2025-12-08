<x-app-layout>

    <div class="max-w-xl mx-auto bg-[#F5DEB3] p-6 rounded-lg shadow-lg mt-10">

        <h1 class="text-3xl font-bold text-black mb-6 text-center">
            Cadastrar Mesa
        </h1>

        <form action="{{ route('mesas.store') }}" method="POST">
            @csrf

            <label class="block font-semibold text-black mb-1">Número da Mesa:</label>
            <input 
                type="number" 
                name="numero" 
                required
                class="w-full border-2 border-black rounded p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-black"
            >

            <label class="block font-semibold text-black mb-1">Lugares:</label>
            <input 
                type="number" 
                name="lugares" 
                required
                class="w-full border-2 border-black rounded p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-black"
            >

            <label class="block font-semibold text-black mb-1">Status:</label>
            <select 
                name="status" 
                class="w-full border-2 border-black rounded p-2 mb-6 bg-white focus:outline-none focus:ring-2 focus:ring-black"
            >
                <option value="livre">Livre</option>
                <option value="ocupada">Ocupada</option>
                <option value="reservada">Reservada</option>
            </select>

            <button 
                type="submit" 
                class="w-full bg-black text-white font-semibold py-2 rounded hover:bg-[#F5DEB3] hover:text-black transition"
            >
                Salvar
            </button>
        </form>

    </div>

</x-app-layout>
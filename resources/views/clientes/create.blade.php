<x-app-layout>
    <div class="max-w-lg mx-auto mt-10 bg-[#f5e6c8] p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-6 text-center">Novo Cliente</h1>

        <form action="{{ route('clientes.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-black font-semibold mb-1">Nome:</label>
                <input 
                    type="text" 
                    name="nome"
                    class="w-full p-2 border border-black rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Telefone:</label>
                <input 
                    type="text" 
                    name="telefone"
                    class="w-full p-2 border border-black rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Email:</label>
                <input 
                    type="email" 
                    name="email"
                    class="w-full p-2 border border-black rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <button 
                type="submit"
                class="w-full bg-black text-white py-2 rounded-md font-semibold hover:bg-white hover:text-black hover:border hover:border-black transition"
            >
                Salvar
            </button>
        </form>
    </div>
</x-app-layout>
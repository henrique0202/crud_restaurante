<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-[#f5e6c8] p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-6 text-center">Novo Funcionário</h1>

        <form action="{{ route('funcionarios.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-black font-semibold mb-1">Nome:</label>
                <input 
                    type="text" 
                    name="nome"
                    class="w-full p-2 border border-black rounded-md bg-white
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Cargo:</label>
                <input 
                    type="text"
                    name="cargo"
                    class="w-full p-2 border border-black rounded-md bg-white
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Salário:</label>
                <input 
                    type="number"
                    name="salario"
                    step="0.01"
                    class="w-full p-2 border border-black rounded-md bg-white
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Telefone:</label>
                <input 
                    type="text"
                    name="telefone"
                    class="w-full p-2 border border-black rounded-md bg-white
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <button 
                type="submit"
                class="w-full bg-black text-white py-2 rounded-md font-semibold
                       hover:bg-white hover:text-black hover:border hover:border-black transition">
                Salvar
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('funcionarios.index') }}"
               class="text-black font-semibold hover:underline">
                Voltar
            </a>
        </div>

    </div>
</x-app-layout>
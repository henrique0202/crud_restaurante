<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-[#f5e6c8] p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-6 text-center">Editar Fornecedor</h1>

        <form action="{{ route('fornecedores.update', $fornecedor) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-black font-semibold mb-1">Nome:</label>
                <input 
                    type="text" 
                    name="nome" 
                    value="{{ $fornecedor->nome }}"
                    class="w-full p-2 border border-black rounded-md bg-white 
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Telefone:</label>
                <input 
                    type="text" 
                    name="telefone" 
                    value="{{ $fornecedor->telefone }}"
                    class="w-full p-2 border border-black rounded-md bg-white 
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ $fornecedor->email }}"
                    class="w-full p-2 border border-black rounded-md bg-white 
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div>
                <label class="block text-black font-semibold mb-1">Produto Fornecido:</label>
                <input 
                    type="text" 
                    name="produto_fornecido" 
                    value="{{ $fornecedor->produto_fornecido }}"
                    class="w-full p-2 border border-black rounded-md bg-white 
                           focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <button 
                type="submit"
                class="w-full bg-black text-white py-2 rounded-md font-semibold 
                       hover:bg-white hover:text-black hover:border hover:border-black 
                       transition">
                Atualizar
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('fornecedores.index') }}" 
               class="text-black font-semibold hover:underline">
                Voltar
            </a>
        </div>
    </div>
</x-app-layout>
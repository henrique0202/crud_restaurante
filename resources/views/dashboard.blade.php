<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard do Sistema') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <a href="{{ route('clientes.index') }}"
                   class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Clientes</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Gerenciar cadastro de clientes.</p>
                </a>

                <a href="{{ route('mesas.index') }}"
                   class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Mesas</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Controle das mesas disponíveis.</p>
                </a>

                <a href="{{ route('reservas.index') }}"
                   class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Reservas</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Gerenciar reservas de clientes.</p>
                </a>

                <a href="{{ route('funcionarios.index') }}"
                   class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Funcionários</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Controle de funcionários do restaurante.</p>
                </a>

                <a href="{{ route('fornecedores.index') }}"
                   class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Fornecedores</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Gerenciar fornecedores de produtos.</p>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>
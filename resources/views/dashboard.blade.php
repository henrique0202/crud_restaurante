<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-nav-link href="{{ route('clientes.index') }}" :active="request()->routeIs('clientes.*')">
                        Clientes
                    </x-nav-link>
                    <x-nav-link href="{{ route('mesas.index') }}" :active="request()->routeIs('mesas.*')">
                        Mesas
                    </x-nav-link>
                    <x-nav-link href="{{ route('reservas.index') }}" :active="request()->routeIs('reservas.*')">
                        Reservas
                    </x-nav-link>
                    <x-nav-link href="{{ route('funcionarios.index') }}" :active="request()->routeIs('funcionarios.*')">
                        Funcionarios
                    </x-nav-link>
                    <x-nav-link href="{{ route('fornecedores.index') }}" :active="request()->routeIs('fornecedores.*')">
                        Fornecedores
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout titulo="Cadastrar novo Cliente">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Cliente
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="post" action="{{ route('clientes.update', $cliente->id) }}" class="max-w-6xl mx-auto">
                    @method('put')
                    @include('clientes._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>





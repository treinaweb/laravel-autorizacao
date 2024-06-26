<x-app-layout titulo="Cadastrar novo Cliente">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Cliente
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                @can('create', \App\Models\Client::class)
                    <div class="flex justify-end my-3">
                        <a
                            class="bg-green-500 border rounded-md p-1 px-3 text-white"
                            href="{{ route('clientes.create') }}"
                        >Criar cliente</a>
                    </div>
                @endcan

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nome
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Endereço
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descrição
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clientes as $cliente)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $cliente->nome }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $cliente->endereco }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $cliente->descricao }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @can('update', $cliente)
                                            <a
                                                href="{{ route('clientes.edit', $cliente->id) }}"
                                                class="bg-blue-500 border rounded-md p-1 px-3 text-white"
                                            >Editar</a>
                                        @endcan

                                        @can('delete', $cliente)
                                            <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}" class="inline-block">
                                                @method('delete')
                                                @csrf

                                                <button
                                                    class="bg-red-500 border rounded-md p-1 px-3 text-white"
                                                    onclick="return confirm('Deseja realmente apagar esse cliente?')"
                                                >Excluir</button>

                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <th>Nenhum Cliente Cadastrado</th>
                                    <td></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="my-4">
                        {{ $clientes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

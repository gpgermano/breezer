<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Produtos Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-o">Listar Produto</h1>
                        <a href="{{ route('admin/produtos/crie')}}" class="btn btn-primary">Criar Produto</a>
                    </div>
                    @if (Session::has('sucesso'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('sucesso')}}
                        </div>
                    @endif
                    
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Categoria</th>
                                <th>Preco</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produtos as $produto)
                            <tr>
                                <td class="aling-middle">{{ $produto->id }}</td>
                                <td class="aling-middle">{{ $produto->titulo }}</td>
                                <td class="aling-middle">{{ $produto->categoria }}</td>
                                <td class="aling-middle">{{ $produto->preco }}</td>
                                <td class="aling-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin/produtos/editar', ['id'=>$produto->id])}}" type="button" class="btn btn-secondary">Editar</a>
                                        <a href="{{ route('admin/produtos/deletar', ['id'=>$produto->id])}}" type="button" class="btn btn-danger">Excluir</a>
                                    </div>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Não existe nenhum produto</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

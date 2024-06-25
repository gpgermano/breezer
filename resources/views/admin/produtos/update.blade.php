<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ __("Edita Produto") }}</h1>
                    <hr/>
                    <form action="{{ route('admin/produtos/update', $produtos->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label">Nome Produto</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{$produtos->titulo}}">
                                @error('titulo')
                                <span class="text-danger">Campo Obrigatório</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label">Categoria</label>
                                <input type="text" name="categoria" class="form-control" placeholder="Categoria" value="{{$produtos->categoria}}">
                                @error('categoria')
                                <span class="text-danger">Campo Obrigatório</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label">Preço</label>
                                <input type="text" name="preco" class="form-control" placeholder="Preço" value="{{$produtos->preco}}">
                                @error('preco')
                                <span class="text-danger">Campo Obrigatório</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

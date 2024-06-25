<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Criar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Adicionar Categorias</h1>
                    {{ __("Adicione seu Produto aqui!") }}
                    @if (Session()->has('Erro'))
                        <div>   
                            {{ Session('error')}}
                        </div>
                    @endif
                    <hr/>
                    <p><a href="{{ route('admin/produtos')}}" class="btn btn-primary">Voltar</a></p>

                    <form action="{{ route('admin/produtos/salvar')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                            </div>
                            @error('titulo')
                                <span class="text-danger">Campo Obrigatório</span>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" name="categoria" class="form-control" placeholder="Categoria">
                            </div>
                            @error('titulo')
                                <span class="text-danger">Campo Obrigatório</span>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <div class="col">
                                <input type="text" name="preco" class="form-control" placeholder="R$ 0,00">
                            </div>
                            @error('titulo')
                                <span class="text-danger">Campo Obrigatório</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
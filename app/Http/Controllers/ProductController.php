<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produtos = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.produtos.home', compact(['produtos', 'total']));
    }

    public function create()
    {
        return view('admin.produtos.create');    
    }

    public function salvar(Request $request)
    {   
        $valida = $request->validate([
            'titulo' => 'required',
            'categoria' => 'required',
            'preco' => 'required',
        ]);
        $data = Product::create($valida);
        if ($data) {
            session()->flash('sucesso', 'Produto adicionado com sucesso!!');
            return redirect(route('admin/produtos'));
        } else {
            session()->flash('Erro', 'Algo deu errado ao salvar!!');
            return redirect(route('admin.produtos/crie'));
        }
    }

    public function delete($id)
    {
        $produtos = Product::findOrFail($id)->delete();
        if ($produtos) {
            session()->flash('sucesso', 'Produto deletado com sucesso!!');
            return redirect(route('admin/produtos'));
        } else {
            session()->flash('Erro', 'Algo deu errado ao deletar!!');
            return redirect(route('admin.produtos/'));
        }
    }

    public function editar($id)
    {
        $produtos = Product::findOrFail($id);
        return view('admin.produtos.update', compact('produtos'));    
    }

    public function update(Request $request, $id)
    {   
        $produtos = Product::findOrFail($id);
        $titulo = $request->titulo;
        $categoria = $request->categoria;
        $preco = $request->preco;

        $produtos->titulo = $titulo;
        $produtos->categoria = $categoria;
        $produtos->preco = $preco;

        $data = $produtos->save();
        if ($data) {
            session()->flash('sucesso', 'Produto atualizado com sucesso!!');
            return redirect(route('admin/produtos'));
        } else {
            session()->flash('Erro', 'Algo deu errado ao atualizar!!');
            return redirect(route('admin/produtos'));
        }
    }
}

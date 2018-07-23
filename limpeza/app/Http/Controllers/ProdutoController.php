<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produto;

class ProdutoController extends Controller
{
    public function criarProduto(Request $request) {

    	$novoProduto = new produto;

    	$novoProduto->nome = $request->nome;
    	$novoProduto->idCategoria = $request->idCategoria;
    	$novoProduto->preco = $request->preco;
    	$novoProduto->quantidade = $request->quantidade;

    	$novoProduto->save();
    }

    public function getProduto($id) {

    	$categoria = produto::findorfail($id);

    	return response()->json([$categoria]);
    }

    public function atualizarProduto(Request $request, $id) {

    	$produto = produto::findorfail($id);

    	$produto->nome = $request->nome;
    	$produto->idCategoria = $request->idCategoria;
    	$produto->preco = $request->preco;
    	$produto->quantidade = $request->quantidade;

    	$Produto->save();
    }

    public function deletarProduto(Request $request) {

    	produto::destroy($id);
    }
}

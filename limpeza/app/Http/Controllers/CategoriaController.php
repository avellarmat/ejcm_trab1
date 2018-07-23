<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;

class CategoriaController extends Controller
{
    public function criarCategoria(Request $request) {

    	$novaCategoria = new categoria;

    	$novaCategoria->nome = $request->nome;

    	$novaCategoria->save();
    }

    public function getCategoria($id) {

    	$categoria = categoria::findorfail($id);

    	return response()->json([$categoria]);
    }

    public function atualizarCategoria(Request $request, $id) {

    	$categoria = categoria::findorfail($id);

    	$categoria->nome = $request->nome;

    	$categoria->save();
    }

    public function deletarCategoria(Request $request) {

    	categoria::destroy($id);
    }
}

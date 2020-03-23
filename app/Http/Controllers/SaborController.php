<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sabores;

class SaborController extends Controller
{

// listando sabores 
public function index(){
    $sabores = sabores::all();

    return view('lista-sabores')->with('sabores', $sabores);
}

// retornando formulario para criar sabores
public function create(){
    return view('adiciona-sabor');
}

// criando registro na tabela sabores
public function store(Request $request){
    $request->validate([
        'nomesabor' => 'required|min:3',
        'ingredientes' => 'required|min:10',
        'preco' => 'required'
    ]);

    $arquivo = $request->file('imagem');

    if(empty($arquivo)){
        $caminhoRelativo = null;
    } else {
        $arquivo->storePublicly('uploads');
        $caminhoAbsoluto = public_path()."/storage/uploads";
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoRelativo = "storage/uploads/$nomeArquivo";
        $arquivo->move($caminhoAbsoluto,$nomeArquivo);
    }

    sabores::create([
        'sabor' => $request->input('nomesabor'),
        'ingredientes' => $request->input('ingredientes'),
        'preco' => $request->input('preco'),
        'imagem' => $caminhoRelativo,
    ]);

    return redirect('/lista-sabores');
}

//retornando formulario para editar sabores
public function edit($id){
    $sabores = sabores::find($id);

    return view('edita-sabores')->with('sabores', $sabores);
}

// alterando sabores
public function update(Request $request, $id){
    $request->validate([
        'nomesabor' => 'required|min:3',
        'ingredientes' => 'required|min:10',
        'preco' => 'required'
    ]);
    $arquivo = $request->file('imagem');

    if(empty($arquivo)){
        $caminhoRelativo = null;
    } else {
        $arquivo->storePublicly('uploads');
        $caminhoAbsoluto = public_path()."/storage/uploads";
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoRelativo = "storage/uploads/$nomeArquivo";
        $arquivo->move($caminhoAbsoluto,$nomeArquivo);
    }

    $sabores = sabores::find($id);

    $sabores->sabor = $request->input('nomesabor');
    $sabores->ingredientes = $request->input('ingredientes');
    $sabores->preco = $request->input('preco');
    $sabores->imagem = $caminhoRelativo;
    
    $sabores->save();

    return redirect('/lista-sabores');
}

// excluindo sabores
public function delete($id){
    $sabores = sabores::find($id);

    $sabores->delete();

    return redirect('/lista-sabores');
}    

}
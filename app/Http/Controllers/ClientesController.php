<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $dados = Cliente::all();
        return view('clientes.index',[
            'clientes' => $dados,
        ]);
    }

    public function cadastrar(){
        return view ('clientes.cadastrar');
    }
    public function gravar(Request $form){ #vai chamar a function gravar/submeter formulário
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'endereco' => 'required',
            'telefone' => 'required',
            'data_nasc' => 'required',
        ]);

        Cliente::create($dados);
       
        return redirect()->route('clientes');
    }

    public function apagar(Cliente $cliente){
        return view('clientes.apagar', [
            'cliente'=> $cliente,
        ]);
    }
}

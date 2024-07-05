<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

    public function index(){
        $dados = Usuario::all();
        return view('usuarios.index',[
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar(){
        return view ('usuarios.cadastrar');
    }
    public function gravar(Request $form){ #vai chamar a function gravar/submeter formulário
        
        $dados = $form->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'username' => 'required|min:3',
            'password' => 'required|min:3',
            'admin' => 'required|min:3',
        ]);

        $dados['password']= Hash::make($dados['password']);

        Usuario::create($dados);
       
        return redirect()->route('usuarios');
    }

    public function apagar(Usuario $usuario){ //apagar vai mostrar tela a confirmação 
        return view('usuarios.apagar', [
            'usuario'=> $usuario,
        ]);
    }

    public function deletar(Usuario $usuario)//deletar vai apagar tudo do banco 
    {
        $usuario->delete();
        return redirect()->route('usuarios');
    }

    public function editar(Usuario $usuario) {
        return view('usuarios/editar', ['usuarios' => $usuario]);
       }
       public function editarGravar(Request $form, Usuario $usuario)
        {
        $dados = $form->validate([
        'nome' => 'required|min:3',
        'email' => 'required|min:3',
        'username' => 'required|min:3',
        'password' => 'required|min:3',
        'admin' => 'required|min:3',
        ]);

        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuario');
        }
}



<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index(){
        $dados = Animal::all();
        return view('animais.index',[
            'animais' => $dados,
        ]);
    }

    public function cadastrar(){
        return view ('animais.cadastrar');
    }
    public function gravar(Request $form)
    { #vai chamar a function gravar/submeter formulário
        dd($form);
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer'
        ]);

        Animal::create($dados);
       
        return redirect()->route('animais');
    }

    public function apagar(Animal $animal){ //apagar vai mostrar tela a confirmação 
        return view('animais.apagar', [
            'animal'=> $animal,
        ]);
    }

    public function deletar(Animal $animal)//deletar vai apagar tudo do banco 
    {
        $animal->delete();
        return redirect()->route('animais');
    }

    public function editar(Animal $animal) {
        return view('animais/editar', ['animal' => $animal]);
       }
       public function editarGravar(Request $form, Animal $animal)
        {
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'idade' => 'required',
        'descricao' => 'required'
        ]);

        $animal->fill($dados);
        $animal->save();
        return redirect()->route('animal');
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index(){
        return view('animais.index');
    }

    public function cadastrar(){
        return view ('animais.cadastrar');
    }
    public function gravar(Request $form){
        #dd($form);
        echo $form->nome;  
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\AnimalCadastrado;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnimaisController extends Controller
{
    public function index() {
        //withTrashed-com apagados
        //onlyTrashed-apenas apagados
        //somente get()-acesso normal aos não apagados
        $dados = Animal::all();
        
        return view('animais.index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('animais.cadastrar');
    }

    public function gravar(Request $form) {
        $img = $form->file('imagem')->store('animais', 'imagens');
        
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer',
        ]);
        $dados['imagem'] =$img; 
        Mail::to('alguem@batata.com')->send(new AnimalCadastrado);
        return;

        #Animal::create($dados);
        
        #return redirect()->route('animais');
    }

    public function apagar(Animal $animal) {
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }

    public function deletar(Animal $animal) {
        $animal->delete();
        return redirect()->route('animais');
    }
}

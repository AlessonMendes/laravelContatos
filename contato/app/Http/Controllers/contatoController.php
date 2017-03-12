<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contatoController extends Controller
{
    public function index(){
    	return view('formulario');

    }

    public function cadastrar(Request $request){

    	$this->validate($request, [
		    'nome' => 'required|max:255',
		    'telefone' => 'required',
		    'email' => 'required|unique:contatos|email',
		]);
    	$contato = new Contato();
    	$contato-> nome = $request->nome;
    	$contato-> telefone = $request->telefone;
    	$contato-> email = $request->email;
    	$contato->save();

    	return view('formulario',['salvou'=>true]);
    }

    public function lista(){
  		$contatos= DB::table('contatos')->paginate(3);
        return view('lista', ['contatos'=>$contatos]);
    }
}

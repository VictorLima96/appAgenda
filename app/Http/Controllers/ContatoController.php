<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        return view('index');
    }

   public function exibirFormContato(){
        return view('cadastrar');
   }

   public function createContato(Request $request){
    $contato = $request->validate(['nomeContato' => 'string|required',
    'foneContato' => 'string|required',
    'emailContato' => 'string|required']);

    Contato::Create($contato);
    return Redirect::route('index');

   }

}
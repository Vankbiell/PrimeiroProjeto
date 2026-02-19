<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExercicioController extends Controller {

    public function exibiFormulario(){
        return view('exercicio');
    }

    public function calcularSoma(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $soma = $valor1 + $valor2;
        return view('exercicio',['soma' => $soma]);
    }

    public function exibirFormulario(Request $request){
        $valor2 = $resquest->input('valor2');
        $valor2 = $resquest->input('valor2');
        $sub = $valor2 - $valor2;
        return view('exercicio2',['sub'=> $sub]);
    }
}
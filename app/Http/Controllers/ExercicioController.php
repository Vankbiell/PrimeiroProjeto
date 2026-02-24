<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ExercicioController extends Controller
{
    public function exibirFormulario(){
        return view('exercicio');
    }
    public function calcularSoma(Request $request){
        $valor1 = $request -> input('valor1');
        $valor2 = $request -> input('valor2');
        $soma = $valor1 + $valor2;
        return view('exercicio',['soma'=> $soma]);
    }
    public function exibirFormulario2(){
        return view('exercicio2');
    }
    public function calcularSub(Request $request){
        $valor1 = $request -> input('valor1');
        $valor2 = $request -> input('valor2');
        $sub = $valor1 - $valor2;
        return view('exercicio2',['sub'=> $sub]);
    }
    public function exibirFormulario3(){
        return view('exercicio3');
    }
    public function calcularMultiplicacao(Request $request){
        $valor1 = $request -> input('valor1');
        $valor2 = $request -> input('valor2');
        $mul = $valor1 * $valor2;
        return view('exercicio3',['mul'=> $mul]);
    }

    public function exibirFormulario4(){
        return view('exercicio4');
    }

    public function calcularDivisao(Request $request){
        $valor1 = $request -> input('valor1');
        $valor2 = $request -> input('valor2');
        if($valor1 <= 0 || $valor2 <=0){
            $e = false
            return view('exercicio4',['e'=> $e]);
        } else{
            $div = $valor1 / $valor2;
            return view('exercicio4',['div'=> $div]);
        }
    }

}
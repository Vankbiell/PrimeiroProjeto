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
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario2(){
        return view('exercicio2');
    }
    public function calcularSub(Request $request){
        $valor1 = $request -> input('valor1');
        $valor2 = $request -> input('valor2');
        $sub = $valor1 - $valor2;
        return view('exercicio2',['sub'=> $sub]);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario3(){
        return view('exercicio3');
    }
    public function calcularMultiplicacao(Request $request){
        $valor1 = $request -> input('valor1');
        $valor2 = $request -> input('valor2');
        $mul = $valor1 * $valor2;
        return view('exercicio3',['mul'=> $mul]);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario4(){
        return view('exercicio4');
    }

    public function calcularDivisao(Request $request)
    {
    $valor1 = $request->input('valor1');
    $valor2 = $request->input('valor2');
    
    if($valor2 == 0) {
        $erro = 'Não é possível dividir por zero!';
        return view('exercicio4', ['erro' => $erro]);
    } else {
        $div = $valor1 / $valor2;
        return view('exercicio4', ['div' => $div]);
    }
    }      
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario5(){
        return view('exercicio5');
    }

    public function calcularMedia(Request $request){
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');
        if ($nota1 < 0 || $nota2 < 0 || $nota3 < 0 ){
            $erro = 'O número não pode ser negativo';
            return view('exercicio5',['erro' => $erro]);
        }else{
            $media = ($nota1 + $nota2 + $nota3) / 3;
            return view('exercicio5', ['media' => $media]);
        }
    }
}
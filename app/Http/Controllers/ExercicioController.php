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
    
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario6(){
        return view('exercicio6');
    }

    public function converterCelcius(Request $request){
        $celcius = $request->input('celcius');
        $f = ($celcius * 1.8) + 32;
        return view('exercicio6', ['f' => $f ]);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario7(){
        return view('exercicio7');
    }

    public function converterFahrenheit(Request $request){
        $fahrenheit = $request->input('fahrenheit');
        $celcius = 5 / 9 * ($fahrenheit - 32);
        return view ('exercicio7',['celcius' => $celcius]);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    
    public function exibirFormulario8(){
        return view('exercicio8');
    }
    public function calcularAreaR(Request $request){
        $altura = $request->input('altura');
        $largura = $request->input('largura');
        if ($altura < 1 || $largura < 1){
            $erro = 'A altura ou a largura é um número negativo ou 0!';
            return view('exercicio8', ['erro' => $erro]);
        }else{
            $area = $altura * $largura;
            return view('exercicio8', ['area' => $area]);
        }
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario9(){
        return view('exercicio9');
    }
    public function calcularAreaC(Request $request){
        $raio = $request->input('raio');
        if($raio < 0){
            $erro = 'O valor do raio é inválido, tente um número positivo maior que 0!';
            return view('exercicio9',['erro' => $erro]);
        }else{
            $area = M_PI * pow($raio, 2);//pow é uma função de PHP para elevar os números, já M_PI é uma função com o valor de PI guardado.
            return view ('exercicio9',['area' => $area]);
        }
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario10(){
        return view ('exercicio10');
    }
    public function calcularPerimetroR(Request $request){
        $altura = $request->input('altura');
        $largura = $request->input('largura');
        $perimetro = 2 * ($altura + $largura);
        return view ('exercicio10', ['perimetro' => $perimetro]);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario11(){
        return view ('exercicio11');
    }
    public function calcularPerimetroC(Request $request){
        $raio = $request->input('raio');
        $perimetro = 2 * M_PI * $raio;
        return view ('exercicio11', ['perimetro' => $perimetro]);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function exibirFormulario12(){
        return view('exercicio12');
    }
}
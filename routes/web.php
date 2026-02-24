<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;
Route::get('/', function () {
    return view('welcome');
});

//rota para abrir o exercicio 1
Route:: get ('/exercicio',[ExercicioController::class, 'exibirFormulario']);
//receber os dados do formulario 1
Route:: post ('/resposta',[ExercicioController::class, 'calcularSoma']);

//rota para abrir o exercicio 2
Route:: get ('/exercicio2',[ExercicioController::class, 'exibirFormulario2']);
//receber os dados do formulario 2
Route:: post ('/resposta2',[ExercicioController::class, 'calcularSub']);

//rota para abrir o exercicio 3
Route:: get ('/exercicio3', [ExercicioController::class, 'exibirFormulario3']);
//receber os dados do formulario 3
Route:: post('/resposta3',[ExercicioController::class, 'calcularMultiplicacao']);

//rota para abrir o exercicio 3
Route:: get ('/exercicio4', [ExercicioController::class, 'exibirFormulario4']);
//receber os dados do formulario 3
Route:: post('/resposta4',[ExercicioController::class, 'calcularDivisao']);
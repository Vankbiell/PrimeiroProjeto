@extends('layout')
@section('conteudo')
<h1>Exercício - Potencialização</h1>
<form method="post" action="/resposta10">
    @CSRF
<div class="mb-3">
        <label for="base" class="form-label">Informe a base </label>
        <input type="number" id="base" name="base" class="form-control" required="">
</div>
<div class="mb-3">
    <label for="expoente" class="form-label">Informe a expoente do Retângulo</label>
    <input type="number" id="expoente" name="expoente" class="form-control" required="">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($perimetro)
<p class="text-success">O Perímetro do Retângulo é: {{$perimetro}}</p>
@endisset
@endsection

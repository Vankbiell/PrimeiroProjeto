<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Primeiro exemplo laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Lista de Exercício</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Exercícios
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdown1">
    <li><a class="dropdown-item" href='exercicio'>Exercício 1 - Adição</a></li>
    <li><a class="dropdown-item" href='exercicio2'>Exercício 2 - Subtração</a></li>
    <li><a class="dropdown-item" href='exercicio3'>Exercício 3 - Multiplicação</a></li>
    <li><a class="dropdown-item" href='exercicio4'>Exercício 4 - Divisão</a></li>
    <li><a class="dropdown-item" href='exercicio5'>Exercício 5 - Média entre 3 notas</a></li>
    <li><a class="dropdown-item" href='exercicio6'>Exercício 6 - Conversão de Celcius para Fahrenheit</a></li>
    <li><a class="dropdown-item" href='exercicio7'>Exercício 7 - Conversão de Fahrenheit para Celcius</a></li>
    <li><a class="dropdown-item" href='exercicio8'>Exercício 8 - Área de um Retângulo</a></li>
    <li><a class="dropdown-item" href='exercicio9'>Exercício 9 - Área de um Círculo</a></li>
    <li><a class="dropdown-item" href='exercicio10'>Exercício 10 - Perímetro de um Retângulo</a></li>
    <li><a class="dropdown-item" href='exercicio11'>Exercício 11 - Perímetro de um Círculo</a></li>
    <li><a class="dropdown-item" href='exercicio12'>Exercício 12 - Potencialização</a></li>
    <li><a class="dropdown-item" href='exercicio13'>Exercício 13 -</a></li>
    <li><a class="dropdown-item" href='exercicio14'>Exercício 14 -</a></li>
    <li><a class="dropdown-item" href='exercicio15'>Exercício 15 -</a></li>
    <li><a class="dropdown-item" href='exercicio16'>Exercício 16 -</a></li>
    <li><a class="dropdown-item" href='exercicio17'>Exercício 17 -</a></li>
    <li><a class="dropdown-item" href='exercicio18'>Exercício 18 -</a></li>
    <li><a class="dropdown-item" href='exercicio19'>Exercício 19 -</a></li>
    <li><a class="dropdown-item" href='exercicio20'>Exercício 20 -</a></li>
  </ul>
</li>
      </ul>
    </div>
  </div>
</nav>
<div class="container py-3">
        @yield('conteudo')
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>

</body>
</html>
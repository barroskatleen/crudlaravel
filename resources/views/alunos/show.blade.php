<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('alunos') }}">Alunos</a></li>
        <li><a href="{{ URL::to('cursos') }}">Cursos</a>
        <li><a href="{{ URL::to('professores') }}">Professores</a>
          <li>
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>                          

    </ul>
</nav>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('alunos') }}">Gerenciar alunos</a></li>
        <li><a href="{{ URL::to('alunos') }}">Visualizar Alunos</a></li>
        <li><a href="{{ URL::to('alunos/create') }}">Cadastrar Aluno</a>
    </ul>
</nav>

<h1>Mostrando {{ $aluno->name }}</h1>

    <div class="jumbotron text-center">
       
        <p>
            <strong>Id Aluno:</strong> {{ $aluno->id_aluno }}<br>
            <strong>Nome:</strong> {{ $aluno->name }}<br>
            <strong>Data de Nascimento:</strong> {{ $aluno->data_nascimento }}<br>
            <strong>Logradouro:</strong> {{ $aluno->logradouro }}<br>
            <strong>Numero:</strong> {{ $aluno->numero }}<br>
            <strong>Bairro:</strong> {{ $aluno->bairro }}<br>
            <strong>Cidade:</strong> {{ $aluno->cidade }}<br>
            <strong>Estado:</strong> {{ $aluno->estado }}<br>
            <strong>Cep:</strong> {{ $aluno->cep }}<br>
            <strong>Data de criação:</strong> {{ date('d/M/Y', $aluno->created_at->timestamp) }}<br>
            

        </p>
    </div>

</div>
</body>
</html>
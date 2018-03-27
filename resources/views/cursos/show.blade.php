<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cursos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('alunos') }}">Alunos</a></li>
        <li><a href="{{ URL::to('cursos') }}">Cursos</a>
        <li><a href="{{ URL::to('professores') }}">Professores</a>
    </ul>
</nav>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cursos') }}">Gerenciar Cursos</a></li>
        <li><a href="{{ URL::to('cursos') }}">Visualizar Cursos</a></li>
        <li><a href="{{ URL::to('cursos/create') }}">Cadastrar Curso</a>
    </ul>
</nav>

<h1>Mostrando {{ $curso->name }}</h1>

    <div class="jumbotron text-center">
       
        <p>
            <strong>Id curso:</strong> {{ $curso->id_curso }}<br>
            <strong>Nome:</strong> {{ $curso->name }}<br>
            <strong>{{ date('d/M/Y', $value->created_at->timestamp) }}</strong>
            

        </p>
    </div>

</div>
</body>
</html>
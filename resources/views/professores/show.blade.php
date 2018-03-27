<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Professores</title>
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
        <li><a href="{{ URL::to('professores') }}">Gerenciar Professores</a></li>
        <li><a href="{{ URL::to('professores') }}">Visualizar Professores</a></li>
        <li><a href="{{ URL::to('professores/create') }}">Cadastrar Professor</a>
    </ul>
</nav>

<h1>Mostrando {{ $professor->name }}</h1>

    <div class="jumbotron text-center">
       
        <p>
            <strong>Id Professor:</strong> {{ $professor->id_professor }}<br>
            <strong>Nome:</strong> {{ $professor->name }}<br>
            <strong>Data de Nascimento:</strong> {{ $professor->data_nascimento }}<br>
            <strong>{{ date('d/M/Y', strtotime($professor->data_nascimento)) }}</strong><br>
            <strong>Data de criação</strong>{{ date('d/M/Y', $professor->created_at->timestamp) }}<br>
            
            

        </p>
    </div>

</div>
</body>
</html>
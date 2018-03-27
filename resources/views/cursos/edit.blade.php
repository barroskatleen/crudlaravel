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

<h1>Edição de Cursos</h1>

@if (!empty($message))
    <div class="alert alert-info">{{ $message }}</div>
@endif


{{ Form::model($curso, array('route' => array('cursos.update', $curso->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('id_curso', 'Id Curso') }}
        {{ Form::text('id_curso', null, array('class' => 'form-control','maxlength' => 10)) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', null, array('class' => 'form-control','maxlength' => 100)) }}
    </div>

    
    {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
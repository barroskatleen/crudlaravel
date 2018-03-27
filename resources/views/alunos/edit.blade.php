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

<h1>Edição de Aluno</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


{{ Form::model($aluno, array('route' => array('alunos.update', $aluno->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('id_aluno', 'Id Aluno') }}
        {{ Form::text('id_aluno', null, array('class' => 'form-control''maxlength' => 10)) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', null, array('class' => 'form-control''maxlength' => 100)) }}
    </div>

    <div class="form-group">
        {{ Form::label('data_nascimento', 'Data de Nascimento') }}
        {{ Form::text('data_nascimento', null, array('class' => 'form-control''maxlength' => 10)) }}
    </div>

    <div class="form-group">
        {{ Form::label('Logradouro', 'Logradouro') }}
        {{ Form::text('logradouro', null, array('class' => 'form-control''maxlength' => 255)) }}
    </div>

    <div class="form-group">
        {{ Form::label('numero', 'Numero') }}
        {{ Form::text('numero', null, array('class' => 'form-control''maxlength' => 10)) }}
    </div>

    <div class="form-group">
        {{ Form::label('bairro', 'Bairro') }}
        {{ Form::text('bairro', null, array('class' => 'form-control''maxlength' => 20)) }}
    </div>

    <div class="form-group">
        {{ Form::label('cidade', 'Cidade') }}
        {{ Form::text('cidade', null, array('class' => 'form-control''maxlength' => 20)) }}
    </div>

     <div class="form-group">
        {{ Form::label('estado', 'Estado') }}
        {{ Form::text('estado', null, array('class' => 'form-control''maxlength' => 20)) }}
    </div>

     <div class="form-group">
        {{ Form::label('cep', 'Cep') }}
        {{ Form::text('cep', null, array('class' => 'form-control''maxlength' => 9)) }}
    </div>


    {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
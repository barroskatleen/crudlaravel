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
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('action' => 'ProfessorController@store')) }}

  
  <div class="form-group">
        {{ Form::label('Id Professor', 'Id Professor') }}
        {{ Form::text('id_professor', Input::old('id_professor'), array('class' => 'form-control', 'maxlength' => 10)) }}
    </div>

  <div class="form-group">
        {{ Form::label('Nome', 'Nome') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control','maxlength' => 100)) }}
  </div>

  <div class="form-group">
        {{ Form::label('Data de Nascimento', 'Data de Nascimento') }}
        {{ Form::date('data_nascimento', Input::old('data_nascimento'), array('class' => 'form-control','maxlength' => 10)) }}
     </div>


  {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}


{{ Form::close() }}
</body>
</html>



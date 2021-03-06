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
        <li><a href="{{ URL::to('cursos') }}">Cursos</a></li>
        <li><a href="{{ URL::to('professores') }}">Professores</a></li>
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
        <li><a href="{{ URL::to('cursos') }}">Gerenciar Cursos</a></li>
        <li><a href="{{ URL::to('cursos') }}">Visualizar Cursos</a></li>
        <li><a href="{{ URL::to('cursos/create') }}">Cadastrar Curso</a></li>
    </ul>
</nav>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('action' => 'CursoController@store')) }}

  
  <div class="form-group">
        {{ Form::label('Id Curso', 'Id Curso') }}
        {{ Form::text('id_curso', Input::old('id_curso'), array('class' => 'form-control', 'maxlength' => 10)) }}
    </div>

  <div class="form-group">
        {{ Form::label('Nome', 'Nome') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control','maxlength' => 100)) }}
  </div>

  {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}


{{ Form::close() }}
</body>
</html>
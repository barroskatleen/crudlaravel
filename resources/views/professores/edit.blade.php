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
        <li><a href="{{ URL::to('professores') }}">Gerenciar Professores</a></li>
        <li><a href="{{ URL::to('professores') }}">Visualizar Professores</a></li>
        <li><a href="{{ URL::to('professores/create') }}">Cadastrar Professor</a></li>
    </ul>
</nav>

<h1>Edição de Professores</h1>

@if (!empty($message))
    <div class="alert alert-info">{{ $message }}</div>
@endif

{{ Form::model($professor, array('route' => array('professores.update', $professor->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('id_professor', 'Id Professor') }}
        {{ Form::text('id_professor', null, array('class' => 'form-control','maxlength' => 10)) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', null, array('class' => 'form-control','maxlength' => 100)) }}
    </div>

    <div class="form-group">
        {{ Form::label('data_nascimento', 'Data de Nascimento') }}
        {{ Form::text('data_nascimento', null, array('class' => 'form-control','maxlength' => 10)) }}
    </div>

    
    {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
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
        <li><a href="{{ URL::to('alunos') }}">Gerenciar alunos</a></li>
        <li><a href="{{ URL::to('alunos') }}">Visualizar Alunos</a></li>
        <li><a href="{{ URL::to('alunos/create') }}">Cadastrar Aluno</a></li>

    </ul>
</nav>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('action' => 'AlunoController@store')) }}

  
  <div class="form-group">
        {{ Form::label('Id Aluno', 'Id Aluno') }}
        {{ Form::text('id_aluno', Input::old('id_aluno'), array('class' => 'form-control', 'maxlength' => 10)) }}
    </div>

  <div class="form-group">
        {{ Form::label('Nome', 'Nome') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control','maxlength' => 100)) }}
  </div>

  <div class="form-group">
        {{ Form::label('Data de Nascimento', 'Data de Nascimento') }}
        {{ Form::date('data_nascimento', Input::old('data_nascimento'), array('class' => 'form-control','maxlength' => 10)) }}
     </div>

     <div class="form-group">
        {{ Form::label('Logradouro', 'Logradouro') }}
        {{ Form::text('logradouro', Input::old('logradouro'), array('class' => 'form-control','maxlength' => 255)) }}
    </div>

     <div class="form-group">
        {{ Form::label('Numero', 'Numero') }}
        {{ Form::text('numero', Input::old('numero'), array('class' => 'form-control','maxlength' => 10)) }}
    </div>

     <div class="form-group">
        {{ Form::label('Bairro', 'Bairro') }}
        {{ Form::text('bairro', Input::old('bairro'), array('class' => 'form-control','maxlength' => 20)) }}
    </div>

     <div class="form-group">
        {{ Form::label('Cidade', 'Cidade') }}
        {{ Form::text('cidade', Input::old('cidade'), array('class' => 'form-control','maxlength' => 20)) }}
    </div>

     <div class="form-group">
        {{ Form::label('Estado', 'Estado') }}
        {{ Form::text('estado', Input::old('estado'), array('class' => 'form-control','maxlength' => 20)) }}
    </div>

    
    <div class="form-group">
        {{ Form::label('Cep', 'Cep') }}
        {{ Form::text('cep', Input::old('cep'), array('class' => 'form-control','maxlength' => 9)) }}
    </div>

  {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}


{{ Form::close() }}
</body>
</html>



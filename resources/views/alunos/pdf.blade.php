<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/css.css') }}">
</head>
<body>
    <nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
    </ul>
</nav>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    </div>
    

<h1>Lista de Alunos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

@foreach($alunos as $key => $value)
<table class="table table-striped table-bordered relatorio" border="0">
    <tr>
        <td>ID Aluno</td>
        <td>Name</td>
        <td>Data de Nascimento</td>
        <td>Logradouro</td>
    </tr>
    <tr>
        <td>{{ $value->id_aluno }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->data_nascimento }}</td>
        <td>{{ $value->logradouro }}</td>
    </tr>
</table>
<table class="table table-striped table-bordered relatorio border-bottom">
    <tr>
        <td>Numero</td>
        <td>Bairro</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Cep</td>
        <td>Data de Criação</td>

    </tr>
    <tr>
        <td>{{ $value->numero }}</td>
        <td>{{ $value->bairro }}</td>
        <td>{{ $value->cidade }}</td>
        <td>{{ $value->estado }}</td>
        <td>{{ $value->cep }}</td>
        <td>{{ date('d/M/Y', $value->created_at->timestamp) }}</td>
      
    </tr>
</table>
<br />
@endforeach

</div>
</body>
</html>
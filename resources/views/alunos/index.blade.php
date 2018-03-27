<!-- app/views/alunos/index.blade.php -->

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
        <li><a href="{{ URL::to('alunos/create') }}">Cadastrar Aluno</a></li>
        <li><a href="{{ URL::to('alunos/export') }}">Relatório</a></li>
    </ul>
</nav>

<h1>Lista de Alunos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID Aluno</td>
            <td>Name</td>
            <td>Data de Nascimento</td>
            <td>logradouro</td>
            <td>Numero</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>Cep</td>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $key => $value)
        <tr>
            <td>{{ $value->id_aluno }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->data_nascimento }}</td>
            <td>{{ $value->logradouro }}</td>
            <td>{{ $value->numero }}</td>
            <td>{{ $value->bairro }}</td>
            <td>{{ $value->cidade }}</td>
            <td>{{ $value->estado }}</td>
            <td>{{ $value->cep }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the aluno (uses the destroy method DESTROY /alunos/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the aluno (uses the show method found at GET /alunos/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('alunos/' . $value->id) }}">Ver</a>

                <!-- edit this aluno (uses the edit method found at GET /alunos/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('alunos/' . $value->id . '/edit') }}">Editar</a>

                {{ Form::open(array('url' => 'alunos/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
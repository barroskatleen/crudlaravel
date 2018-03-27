<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Professores</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
    

<h1>Lista de Professores</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID Professor</td>
            <td>Name</td>
            <td>Data de Nascimento</td>
            <td>Data de Criação</td>
        </tr>
    </thead>
    <tbody>
    @foreach($professores as $key => $value)
        <tr>
            <td>{{ $value->id_aluno }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->data_nascimento }}</td>
            <td>{{ date('d/M/Y', strtotime($value->data_nascimento)) }}</td>
            <td>{{ date('d/M/Y', $value->created_at->timestamp) }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the professor (uses the destroy method DESTROY /professores/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the professor (uses the show method found at GET /professores/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('professores/' . $value->id) }}">Ver</a>

                <!-- edit this professor (uses the edit method found at GET /professores/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('professores/' . $value->id . '/edit') }}">Editar</a>

                <!-- edit this professor (uses the edit method found at GET /professores/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('professores/' . $value->id . '/repost') }}">Relatorio</a>

                {{ Form::open(array('url' => 'professores/' . $value->id, 'class' => 'pull-right')) }}
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
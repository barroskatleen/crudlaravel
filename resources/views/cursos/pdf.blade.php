<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cursos</title>
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
    

<h1>Lista de Cursos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID Curso</td>
            <td>Name</td>
            <td>Data de Criação</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cursos as $key => $value)
        <tr>
            <td>{{ $value->id_curso }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ date('d/M/Y', $value->created_at->timestamp) }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the curso (uses the destroy method DESTROY /cursos/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the curso (uses the show method found at GET /cursos/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('cursos/' . $value->id) }}">Ver</a>

                <!-- edit this curso (uses the edit method found at GET /cursos/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('cursos/' . $value->id . '/edit') }}">Editar</a>

                <!-- edit this curso (uses the edit method found at GET /cursos/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('cursos/' . $value->id . '/repost') }}">Relatorio</a>

                {{ Form::open(array('url' => 'cursos/' . $value->id, 'class' => 'pull-right')) }}
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
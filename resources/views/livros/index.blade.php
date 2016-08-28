@extends('layout/app')

@section('content')
    <h1>Minha Livraria</h1>
    <a href="{{url('/livro/create')}}" class="btn btn-success">Criar um Livro</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Publicação</th>
            <th>Imagem</th>
            <th colspan="3">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($livros as $livro)
            <tr>
                <td>{{ $livro->id }}</td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->editora }}</td>
                <td>{{ $livro->publicacao }}</td>
                <td><img src="{{asset('img/'.$livro->image.'.jpg')}}" height="35" width="30"></td>
                <td><a href="{{url('livro',$livro->id)}}" class="btn btn-primary">Ler</a></td>
                <td><a href="{{route('livro.edit',$livro->id)}}" class="btn btn-warning">Alterar</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['livro.destroy', $livro->id]]) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
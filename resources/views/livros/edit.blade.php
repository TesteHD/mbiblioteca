@extends('layout.app')
@section('content')
    <h1>Atualizar Livro </h1>
    {!! Form::model($livro,['method' => 'PATCH','files'=>true,'route'=>['livros.update',$livro->id]]) !!}

    <div class="form-group">
        {!! Form::label('Titulo', 'Titulo:') !!}
        {!! Form::text('titulo',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Autor', 'Autor:') !!}
        {!! Form::text('autor',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Editora', 'Editora:') !!}
        {!! Form::text('editora',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publicação', 'Publicação:') !!}
        {!! Form::date('publicacao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Descricao', 'Descricao:') !!}
        {!! Form::textarea('descricao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('alterar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
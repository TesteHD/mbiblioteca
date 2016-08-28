@extends('layout.app')

@section('content')
    <h1>Criar um Livro</h1>
    {!! Form::open(['url' => 'livros', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('Titulo', 'Titulo:') !!}
        {!! Form::text('titulo',null,['class'=>'form-control']) !!}
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
        {!! Form::label('Descrição', 'Descrição:') !!}
        {!! Form::textarea('descricao',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('gravar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
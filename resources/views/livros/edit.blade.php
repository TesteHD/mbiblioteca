@extends('layout.app')
@section('content')
    <h1>Atualizar Livors </h1>
    {!! Form::model($livro,['method' => 'PATCH','route'=>['livro.update',$livro->id]]) !!}

    <div class="form-group">
        {!! Form::label('Titulo', 'Titulo:') !!}
        {!! Form::text('titulo',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Autor', 'Autor:') !!}
        {!! Form::text('autor',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Editora', 'Editora:') !!}
        {!! Form::text('editora',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publicação', 'Publicação:') !!}
        {!! Form::date('pblicacao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Descricao', 'Descricao:') !!}
        {!! Form::textarea('descricao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('alterar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
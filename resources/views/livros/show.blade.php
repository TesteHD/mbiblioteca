@extends('layout/app')
@section('content')
    <h1>Ver o Livro</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Capa</label>
            <div class="col-sm-10">
                <img src="{{asset('img/'.$livro->image.'.jpg')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Autor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder={{$livro->autor}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder={{$livro->titulo}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Editora</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" placeholder={{$livro->editora}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder={{$livro->descricao}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('livro')}}" class="btn btn-primary">voltar</a>
            </div>
        </div>
    </form>
@stop
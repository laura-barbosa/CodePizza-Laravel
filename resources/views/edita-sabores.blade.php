@extends('layouts.app')

@section('title', 'Blockbuster - Filmes')

@section('content')
    <h1>Modificando os Sabores</h1>

    <form method="POST" action="/edita-sabores/{{$sabores->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="nomesabor">Nome do Sabor</label>
            <input type="text" name="nomesabor"  value="{{ $sabores->sabor }}" class="form-control{{$errors->has('nomesabor') ? ' is-invalid':''}}" id="nomesabor">
            <div class="invalid-feedback">{{ $errors->first('nomesabor') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="ingredientes">Ingredientes</label>
            <input type="text" name="ingredientes"  value="{{ $sabores->ingredientes }}" class="form-control{{$errors->has('ingredientes') ? ' is-invalid':''}}" id="ingredientes">
            <div class="invalid-feedback">{{ $errors->first('ingredientes') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="preco">Preço</label>
            <input type="text" name="preco"  value="{{ $sabores->preco }}" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem">
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
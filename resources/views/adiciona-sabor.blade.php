@extends('layouts.app')

@section('content')
    <h1>Cadastro de Sabores</h1>

    <form method="POST" action="/adiciona-sabor" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group col-md-6 col-sm-12">
            <label for="nomesabor">Nome do Sabor</label>
            <input type="text" name="nomesabor"  value="{{ old('nomesabor') }}" class="form-control{{$errors->has('nomesabor') ? ' is-invalid':''}}" id="nomesabor">
            <div class="invalid-feedback">{{ $errors->first('nomesabor') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="ingredientes">Ingredientes</label>
            <input type="text" name="ingredientes"  value="{{ old('ingredientes') }}" class="form-control{{$errors->has('ingredientes') ? ' is-invalid':''}}" id="ingredientes">
            <div class="invalid-feedback">{{ $errors->first('ingredientes') }}</div>
        </div>


        <div class="form-group col-md-6 col-sm-12">
            <label for="preco">Preço</label>
            <input type="text" name="preco"  value="{{ old('preco') }}" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>

        <!--<div class="form-group col-md-6 col-sm-12">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem">
        </div> -->

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
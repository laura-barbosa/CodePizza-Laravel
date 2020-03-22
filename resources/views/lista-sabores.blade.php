@extends('layouts.app')

@section('title', 'Blockbuster - Filmes')

@section('content')
    @if($sabores->isEmpty())
        <div class="col-12">
            <h1 class="col-12 text-center">Que pena! Não temos sabores cadastrados na plataforma</h1>
        </div>
    @else
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">Sabores</h1>
                <p class="col-12 d-block text-center"><b>listando todos os sabores da nossa plataforma</b></p>
            </header>
        </section>

        <!-- botao de cadastrar novos sabores -->

        <a href="adiciona-sabor" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Incluir novos Sabores</a>

        <br>
        <br>

        <!-- lista para editar os sabores -->

        <section class="row">
            <article class="col-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Imagem</th>                            
                            <th scope="col">Nome do Sabor</th>
                            <th scope="col">Ingredientes</th>
                            <th scope="col">preço</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sabores as $sabores)
                        <tr>
                            <td scope="row">
                                <img width="80" height="80" src="{{ $sabores->imagem_image }}" alt="">
                            </td>
                            <td scope="row">{{$sabores->sabor}}</td>
                            <td scope="row">{{$sabores->ingredientes}}</td>
                            <td scope="row">{{$sabores->preco}}</td>
                            {{-- <td scope="row">{{$filme->genero->descricao}}</td> --}}
                            <td>
                                <a href="/edita-sabores/{{$sabores->id}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{ $sabores->id }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="modal{{ $sabores->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja excluir o sabor {{ $sabores->sabor }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Sabor: {{ $sabores->sabor }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <form action="/exclui-sabor/{{ $sabores->id }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">Excluir</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">
                    {{ $filmes->appends(['search' => isset($search) ? $search : ''])->links() }}
                </div> --}}
            </article>
        </section>
    @endif
@endsection
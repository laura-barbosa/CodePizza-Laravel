@extends('layouts.master')

@section('content')
<div class="card mb-4 w-100 .float-left mt-4">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" >Quem somos</h5>
                <div style="width: 400px">
                    <p class="card-text">
            
                    Desde 1971 a CodePizza, está localizada em um dos principais bairros de São Paulo, com muito orgulho em fazer parte do coração da Mooca, levamos como principal conceito, a satisfação dos nossos clientes e também aquela interação diferenciada e duradoura.<br><br>
            
                    E para você que almeja estar em um ambiente tradicional e familiar e admira uma bela pizza,. Venha conhecer à CodePizza, que tem como opção de atendimento, o nosso salão ou o famoso balcão de Pizzas da Mooca. Aguardamos por você e sua família.<br>
                </div>
            </div>
        </div>
    <div class="col-md-4" id="legopizza">
    <img src="{{asset('img/historia.jpg')}}" class="card-img" alt="...">
</div>

@endsection
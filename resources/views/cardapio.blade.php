

@extends('layouts.master')
    @php 
        $nivelAcesso = mt_rand(0,1);

        $filmes = [
            "0" => [
                "imagem" => "img/ruby-codepizza.png",
                "titulo" => "RUBY",
                "sabores" => "molho de tomate, muzzarela especial, manjericão, polvilhada com parmesão ralado, orégano e azeitonas pretas.",
                "preco" => "R$ 80,00"
            ],
            "1" => [
                "imagem" => "img/python-codepizza.png",
                "titulo" => "PYTHON",
                "sabores" => "molho de tomate, calabresa fatiada, cebola, orégano e azeitonas pretas.",
                "preco" => "R$ 85,00"
            ],
            "2" => [
                "imagem" => "img/cSHARP-codepizza.png",
                "titulo" => "C#",
                "sabores" => "molho de tomate, lombo canadense, alho dourado, Catupiry, orégano e azeitonas pretas.",
                "preco" => "R$ 95,00"
            ],
            "3" => [
                "imagem" => "img/mysql-codepizza.png",
                "titulo" => "Brooklyn Nine Nine",
                "sabores" => "molho de tomate, muzzarela especial, rodelas de tomate, filés de anchova argentina, orégano e azeitonas pretas.",
                "preco" => "R$ 66,30"
            ],
            "4" => [
                "imagem" => "img/C-MAIS-MAIS-CODEPIZZA.png",
                "titulo" => "C++",
                "sabores" => "molho de tomate, muzzarela especial, champignon na manteiga, bacon, orégano e azeitonas pretas.",
                "preco" => "R$ 92,00"
            ],
            "5" => [
                "imagem" => "img/html5-codepizza.png",
                "titulo" => "HTML 5",
                "sabores" => "molho de tomate, lombo defumado Sadia, cebola, orégano e azeitona preta.",
                "preco" => "R$ 45,00"
            ],
            "6" => [
                "imagem" => "img/php-codepizza.png",
                "titulo" => "PHP",
                "sabores" => "molho de tomate, brócoles alho-e-óleo, bacon em cubos, Catupiry, orégano e azeitonas pretas.",
                "preco" => "R$ 41,50"
            ],
            "7" => [
                "imagem" => "img/css-codepizza.png",
                "titulo" => "CSS",
                "sabores" => "molho de tomate, peito de frango desfiado, coberta com Catupiry, orégano e azeitonas pretas.",
                "preco" => "R$ 78,60"
            ],
            "8" => [
                "imagem" => "img/java-codepizza.png",
                "titulo" => "JAVA",
                "sabores" => "molho de tomate, linguiça calabresa moída, Catupiry, parmesão ralado, orégano e azeitonas pretas.",
                "preco" => "R$ 57,00"
            ]
        ];
    @endphp
       
@section('content')
    <section class="mt-5 container">
        <h1>Escolha sua Pizza aqui!</h1>
        <p>As melhores pizzas da cidade!!!</p>
        <div class="row">
            @foreach($filmes as $key => $value): 
                <div class="border mb-5 col-12 col-md-6 col-lg-3">
                    <img class="img-fluid" src="{{ asset($value['imagem']) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value["titulo"]; ?></h5>
                        <p class="card-text"><?php echo $value["sabores"]; ?></p>
                        <p class="card-text"><small class="text-muted">CodePizza...</small></p>
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal<?php echo $key; ?>">
                            Saiba mais...
                        </button>
                        <form action="compra.php" method="GET" class="d-inline-block">
                            <input type="hidden" value="<?php echo $value["titulo"]; ?>" name="titulo">
                            <button type="submit" class="btn btn-primary mb-4">
                                Comprar
                            </button>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $value["titulo"]; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                
                                    <p><i class="fa fa-pizza-slice mr-2"></i> Ingredientes: <?php echo $value["sabores"]; ?></p>
                                    <p><i class="fa fa-angry mr-2"></i> Preço: <?php echo $value["preco"]; ?></p>
                                                     
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
@endsection  
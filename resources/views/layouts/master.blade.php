<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CodePizza</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="font-family:'Arial, sans-serif'; font-weight: bold; font-size: 12px; color:white;">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/pizza.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="font-family:proxima-nova;">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(Página atual)</span></a>
                    <a class="nav-item nav-link" href="#">Cardápio</a>
                    <a class="nav-item nav-link" href="#">Delivery</a>
                    <a class="nav-item nav-link" href="#">Quem somos</a>
                    <a class="nav-item nav-link" href="#">Cupom</a>
                </div>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-warning my-2 my-sm-0" onClick="window.open('login.html','pagename','resizable,height=800px,width=1600px'); return false;" type="submit" id="btnLogin"> Login</button>
                </form>
            <form class="form-inline" id="formLogin" style="display:none">
                <div class="form-group mx-sm-3 mb-2" >
                    <label for="inputPassword2" class="sr-only">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Senha</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirmar identidade</button>
            </form>
        </nav>
    </header>

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
                    {{-- <form action="compra.php" method="GET" class="d-inline-block">
                        <input type="hidden" value="<?php echo $value["titulo"]; ?>" name="titulo">
                        <button type="submit" class="btn btn-primary mb-4">
                            Comprar
                        </button>
                    </form> --}}
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


<div class="Index-page-content  mt-4 w-100 .float-left" style="margin-left:50px;" id="yui_3_17_2_1_1582853149157_67">
        <div class="sqs-layout sqs-grid-12 columns-12">
            <img src="{{asset('/img/apaixonados.png')}}">
        </div>
        <div  id="texto" style="font-family: proxima-nova;  float:left; width:550px; margin-left:500px; margin-top:-100px;" class="sqs-block-content">
            <p>Ingredientes garimpados, receitas inspiradas, hospitalidade em cada
                detalhe. Com 20 anos de história e o posto <strong>entre as 10
                    melhores pizzarias do mundo</strong> - em ranking dos jornais
                <em>The Guardian</em> e <em>Corriere della Sera</em> -, a CodePizza é
                uma pizzaria apaixonada por pizza, como você.
            </p>
        </div>
    </div>


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

    <main class="py-4">
        @yield('content')
    </main>

    <div class="footer" style=" width: auto; height: 70px; margin-top: 100px;">
        <div style="float: left; width:400px;">
            <span style=" margin-left:200px; float: left; font-weight: bold; font-size: 15px;">CONTATO</span>
            <span style=" margin-left:-100px;margin-top: 60px; float: left;">(11) 4701-7287</span>
            <span style=" margin-left:-108px; margin-top: 90px; float:left;">(11) 4786-5463</span>
            <img style="float:left; margin-top: 140px; margin-left: -110px;" src="{{ asset('img/facebook.jpg')}}" width="60" height="30" class="d-inline-block align-top" alt="" style="float:left">
            <img style="float:left; margin-top: 140px; margin-left: -50px;" src="{{ asset('img/instagram.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" style="float:left">
            <span style="float:left; margin-top: 170px; margin-left: -95px;">#codepizza</span>
        </div>
        <div style= " margin-left: 200px;float:left;font-size: 15px; width:400px; ">
            <span style=" float: left; font-size: 15px; font-weight: bold; ">ENDEREÇO</span>
            <span style="margin-left: -120px;; margin-top:35px;float:left;"><br>
            Rua Doutor Mario Augusto Pereira, 88 - 3 -<br>
            Parque Pinheiros<br>
            Taboão da Serra - <br>
            SP06767-230Brasil<br>
            </span>
        </div>
        <div style=" margin-left: 950px;font-size:15px; float:left; margin-top: -200px; width: 300px;">
            <span style="float: left; font-size: 15px; font-weight: bold;">HORÁRIO DE FUNCIONAMENTO</span>
            <span style="margin-left: 40px; margin-top: 15px; float: left;">
            <br>
            seg.:	18:00 – 01:00<br>
            ter.:	18:00 – 01:00<br>
            qua.:	18:00 – 01:00<br>
            qui.:	18:00 – 01:00<br>
            sex.:	18:00 – 02:00<br>
            sáb.:	18:00 – 02:00<br>
            dom.:	18:00 – 02:00<br>
            </span>
        </div>
    </div>
</body>
</html> 


<style type="text/css">
    #texto{
        font-weight: 300;
        font-style: normal;
        font-size: 14px;
        letter-spacing: .03em;
        line-height: 1.9em;
        text-transform: none;
        color: #454545;
        font-weight: 400;
        font-size: 16px;
        letter-spacing: 0em;
        line-height: 1.6em;
    }
    
            @font-face {
                font-family: proxima-nova;
                src: url(https://use.typekit.net/af/cebe0e/00000000000000003b9b3060/27/l?subset_id=2&fvd=n3&v=3) format("woff2"), url(https://use.typekit.net/af/cebe0e/00000000000000003b9b3060/27/d?subset_id=2&fvd=n3&v=3) format("woff"), url(https://use.typekit.net/af/cebe0e/00000000000000003b9b3060/27/a?subset_id=2&fvd=n3&v=3) format("opentype");
                font-weight: 300;
                font-style: normal;
            }
    
            @font-face {
                font-family: proxima-nova;
                src: url(https://use.typekit.net/af/6e816b/00000000000000003b9b3064/27/l?subset_id=2&fvd=n5&v=3) format("woff2"), url(https://use.typekit.net/af/6e816b/00000000000000003b9b3064/27/d?subset_id=2&fvd=n5&v=3) format("woff"), url(https://use.typekit.net/af/6e816b/00000000000000003b9b3064/27/a?subset_id=2&fvd=n5&v=3) format("opentype");
                font-weight: 500;
                font-style: normal;
            }
    
            @font-face {
                font-family: proxima-novaproxima-nova;
                src: url(https://use.typekit.net/af/949f99/00000000000000003b9b3068/27/l?subset_id=2&fvd=n7&v=3) format("woff2"), url(https://use.typekit.net/af/949f99/00000000000000003b9b3068/27/d?subset_id=2&fvd=n7&v=3) format("woff"), url(https://use.typekit.net/af/949f99/00000000000000003b9b3068/27/a?subset_id=2&fvd=n7&v=3) format("opentype");
                font-weight: 700;
                font-style: normal;
            }
    
            @font-face {
                font-family: proxima-nova;
                src: url(https://use.typekit.net/af/40ff7f/00000000000000003b9b3061/27/l?subset_id=2&fvd=i3&v=3) format("woff2"), url(https://use.typekit.net/af/40ff7f/00000000000000003b9b3061/27/d?subset_id=2&fvd=i3&v=3) format("woff"), url(https://use.typekit.net/af/40ff7f/00000000000000003b9b3061/27/a?subset_id=2&fvd=i3&v=3) format("opentype");
                font-weight: 300;
                font-style: italic;
            }
    
            @font-face {
                font-family: proxima-nova;
                src: url(https://use.typekit.net/af/4c4052/00000000000000003b9b3069/27/l?subset_id=2&fvd=i7&v=3) format("woff2"), url(https://use.typekit.net/af/4c4052/00000000000000003b9b3069/27/d?subset_id=2&fvd=i7&v=3) format("woff"), url(https://use.typekit.net/af/4c4052/00000000000000003b9b3069/27/a?subset_id=2&fvd=i7&v=3) format("opentype");
                font-weight: 700;
                font-style: italic;
            }
    
            @font-face {
                font-family: hypatia-sans-pro;
                src: url(https://use.typekit.net/af/5516de/00000000000000003b9ada9d/27/l?subset_id=2&fvd=n2&v=3) format("woff2"), url(https://use.typekit.net/af/5516de/00000000000000003b9ada9d/27/d?subset_id=2&fvd=n2&v=3) format("woff"), url(https://use.typekit.net/af/5516de/00000000000000003b9ada9d/27/a?subset_id=2&fvd=n2&v=3) format("opentype");
                font-weight: 200;
                font-style: normal;
            }
    
            @font-face {
                font-family: hypatia-sans-pro;
                src: url(https://use.typekit.net/af/f8d87f/00000000000000003b9adaa2/27/l?subset_id=2&fvd=n4&v=3) format("woff2"), url(https://use.typekit.net/af/f8d87f/00000000000000003b9adaa2/27/d?subset_id=2&fvd=n4&v=3) format("woff"), url(https://use.typekit.net/af/f8d87f/00000000000000003b9adaa2/27/a?subset_id=2&fvd=n4&v=3) format("opentype");
                font-weight: 400;
                font-style: normal;
            }
    
            @font-face {
                font-family: hypatia-sans-pro;
                src: url(https://use.typekit.net/af/e1fc43/00000000000000003b9adaa3/27/l?subset_id=2&fvd=n6&v=3) format("woff2"), url(https://use.typekit.net/af/e1fc43/00000000000000003b9adaa3/27/d?subset_id=2&fvd=n6&v=3) format("woff"), url(https://use.typekit.net/af/e1fc43/00000000000000003b9adaa3/27/a?subset_id=2&fvd=n6&v=3) format("opentype");
                font-weight: 600;
                font-style: normal;
            }
    
            @font-face {
                font-family: hypatia-sans-pro;
                src: url(https://use.typekit.net/af/14e069/00000000000000003b9ada9b/27/l?subset_id=2&fvd=n7&v=3) format("woff2"), url(https://use.typekit.net/af/14e069/00000000000000003b9ada9b/27/d?subset_id=2&fvd=n7&v=3) format("woff"), url(https://use.typekit.net/af/14e069/00000000000000003b9ada9b/27/a?subset_id=2&fvd=n7&v=3) format("opentype");
                font-weight: 700;
                font-style: normal;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/ae4f6c/000000000000000000010096/27/l?subset_id=2&fvd=n3&v=3) format("woff2"), url(https://use.typekit.net/af/ae4f6c/000000000000000000010096/27/d?subset_id=2&fvd=n3&v=3) format("woff"), url(https://use.typekit.net/af/ae4f6c/000000000000000000010096/27/a?subset_id=2&fvd=n3&v=3) format("opentype");
                font-weight: 300;
                font-style: normal;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/9b05f3/000000000000000000013365/27/l?subset_id=2&fvd=n4&v=3) format("woff2"), url(https://use.typekit.net/af/9b05f3/000000000000000000013365/27/d?subset_id=2&fvd=n4&v=3) format("woff"), url(https://use.typekit.net/af/9b05f3/000000000000000000013365/27/a?subset_id=2&fvd=n4&v=3) format("opentype");
                font-weight: 400;
                font-style: normal;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/2cd6bf/00000000000000000001008f/27/l?subset_id=2&fvd=n5&v=3) format("woff2"), url(https://use.typekit.net/af/2cd6bf/00000000000000000001008f/27/d?subset_id=2&fvd=n5&v=3) format("woff"), url(https://use.typekit.net/af/2cd6bf/00000000000000000001008f/27/a?subset_id=2&fvd=n5&v=3) format("opentype");
                font-weight: 500;
                font-style: normal;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/c4c302/000000000000000000012192/27/l?subset_id=2&fvd=n6&v=3) format("woff2"), url(https://use.typekit.net/af/c4c302/000000000000000000012192/27/d?subset_id=2&fvd=n6&v=3) format("woff"), url(https://use.typekit.net/af/c4c302/000000000000000000012192/27/a?subset_id=2&fvd=n6&v=3) format("opentype");
                font-weight: 600;
                font-style: normal;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/309dfe/000000000000000000010091/27/l?subset_id=2&fvd=n7&v=3) format("woff2"), url(https://use.typekit.net/af/309dfe/000000000000000000010091/27/d?subset_id=2&fvd=n7&v=3) format("woff"), url(https://use.typekit.net/af/309dfe/000000000000000000010091/27/a?subset_id=2&fvd=n7&v=3) format("opentype");
                font-weight: 700;
                font-style: normal;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/1eb35a/000000000000000000010090/27/l?subset_id=2&fvd=i5&v=3) format("woff2"), url(https://use.typekit.net/af/1eb35a/000000000000000000010090/27/d?subset_id=2&fvd=i5&v=3) format("woff"), url(https://use.typekit.net/af/1eb35a/000000000000000000010090/27/a?subset_id=2&fvd=i5&v=3) format("opentype");
                font-weight: 500;
                font-style: italic;
            }
    
            @font-face {
                font-family: futura-pt;
                src: url(https://use.typekit.net/af/eb729a/000000000000000000010092/27/l?subset_id=2&fvd=i7&v=3) format("woff2"), url(https://use.typekit.net/af/eb729a/000000000000000000010092/27/d?subset_id=2&fvd=i7&v=3) format("woff"), url(https://use.typekit.net/af/eb729a/000000000000000000010092/27/a?subset_id=2&fvd=i7&v=3) format("opentype");
                font-weight: 700;
                font-style: italic;
            }
*{
	margin:0;
	padding:0;
}

/* #yui_3_17_2_1_1582853149157_67{
	position:absolute;
	top:0;
	left:0;
	z-index:11;
	background-color:#000;
	width:100%;
	height:100%;
	opacity: .50;
	filter: alpha(opacity=65);
} */
            </style>
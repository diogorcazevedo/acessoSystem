<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="language" content="pt-br">
    <meta name="author" content="Diogo Azevedo">
    <meta name="keywords" content="concurso publico">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Sistema de concurso público acesso público">
    <title>Acesso Público</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{url('img/favico/apple-icon-57x57.png')}}"/>
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('img/favico/apple-icon-60x60.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('img/favico/apple-icon-72x72.png')}}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('img/favico/apple-icon-76x76.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('img/favico/apple-icon-114x114.png')}}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('img/favico/apple-icon-120x120.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('img/favico/apple-icon-144x144.png')}}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('img/favico/apple-icon-152x152.png')}}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('img/favico/apple-icon-180x180.png')}}"/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('img/favico/android-icon-192x192.png')}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('img/favico/favicon-32x32.png')}}"/>
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('img/favico/favicon-96x96.png')}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('img/favico/favicon-16x16.png')}}"/>


    <!-- Styles -->
    <link href="{{url(elixir('css/all.css'))}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

</head>
<!--/head-->
<header>
    <p class="logotopo"><a href="{{route('home')}}">
            <img src="{{url('img/home/logo_acesso.png')}}">
        </a>
    </p>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Acesso Público</span>
                    <span id="icon-bar" class="icon-bar"></span>
                    <span id="icon-bar" class="icon-bar"></span>
                    <span id="icon-bar" class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right primeiroheader">
                    <li><a id="primeiromenu" href="{{ route('home.enterprise')}}">Instituição</a></li>
                    <li><a id="primeiromenu" href="{{ route('home.evaluation')}}">Provas e Instrumentos de
                            Avaliação</a></li>
                    <li><a id="primeiromenu" href="{{route('admin.layout.admin')}}">Administração</a></li>
                    <li><a id="primeiromenu" href="http://webmail.acessopublico.com.br/">Webmail</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar2">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Administração Acesso</span>
                <span id="icon-bar" class="icon-bar"></span>
                <span id="icon-bar" class="icon-bar"></span>
                <span id="icon-bar" class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="segundomenu" href="{{route('contacts.create')}}">CONTATO</a></li>
                <li><a id="segundomenu" href="{{route('home.security')}}">SEGURANÇA</a></li>
                <li><a id="segundomenu" href="{{route('home.governance')}}">GOVERNANÇA</a></li>
                <li><a id="segundomenu" href="{{url('/login')}}">LOGIN</a></li>
                <li><a id="segundomenu" href="{{url('/register')}}">CADASTRAR</a></li>
            </ul>
        </div>
        </div>
    </nav>

</header>
<body>

<section>
    @yield('content')
</section>


<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">

            <section class="endereco">
                <h2 class="meio">ENDEREÇOS</h2>

                <div class="col-lg-offset-2 col-lg-5">
                    <article>
                        <a href="#">
                            <h2 class="meio2">Sede:</h2>

                            <div class="short"> Rua Prof. Gabizo, 41 Tijuca <br/> Rio de Janeiro / RJ</div>
                        </a>
                    </article>
                </div>
                <div class="col-lg-5">
                    <article>
                        <a href="#">
                            <h2 class="meio2">Regional Espirito Santo:</h2>

                            <div class="short">Av Nossa Senhora da Penha 280, sala 205 <br/> Vitória / ES</div>
                        </a>
                    </article>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="seta"></div>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">

            <h3 class="meio">CANAIS DE CONTATO</h3>

            <div class="col-lg-offset-1 col-lg-5">
                <div class="col-lg-4">

                    <img src="{{url('img/home/contato-email.png')}}" class="pull-right">
                </div>
                <div class="col-lg-8 borda">
                    <p style="clear: both; width: 60%; margin-top: 20%;"><a class="bt" href="#">Fale conosco</a></p>
                    <!--    <p class="canal">  <a href="mailto:proposta@acessopublico.com.br">proposta@acessopublico.org.br</a></p>
                            <p class="canal">   <a href="mailto:suporte@acessopublico.com.br">suporte@acessopublico.org.br</a> </p>-->
                </div>

                <br/><br/><br/><br/><br/><br/>

                <h3 style="clear: both;" class="horadeatendimento">HORÁRIO DE ATENDIMENTO: 9:00 às 17:00</h3>
            </div>


            <div class="col-lg-3">
                <div class="col-lg-4">
                    <img class="phone" src="{{url('img/home/contato-phone.png')}}">
                </div>
                <div class="col-lg-8 borda">
                    <div class="fone-group">
                        <p class="canal2">Comercial</p>

                        <p class="canal">(21) 3174-0911</p>
                        <!-- <p class="canal2">Comercial ES</p>
                         <p class="canal">(27) 3029-7774</p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <!-- Site footer -->


    <div id="rodape">
        <address><img class="img-responsive" src="{{url('img/home/rodape.jpg')}}"/></address>
    </div>
</footer>
</div>
</div>
</body>
</html>
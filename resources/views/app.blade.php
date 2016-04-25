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
    <title>Instituto de Seleção</title>


    <link href="{{url(elixir('css/all.css'))}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>
<!--/head-->
<body>
<p class="logoIST"><a href="{{ url('/') }}"><img src="{{url('img/logo.png')}}" alt="" width="100" /></a></p>

<header id="header"><!--header-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="dropdown"><a href="#">Instituição<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a  href="{{ route('home.enterprise')}}">Instituição</a></li>
                                    <li><a  href="{{ route('home.evaluation')}}">Provas</a></li>
                                    <li><a  href="{{route('home.security')}}">Segurança</a></li>
                                    <li><a  href="{{route('home.governance')}}">Governança</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Administração<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{route('admin.layout.admin')}}">Painel</a></li>
                                    <li><a  href="http://webmail.acessopublico.com.br/">Webmail</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contacts.create')}}">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            @if(auth()->guest())
                                @if(!Request::is('auth/login'))
                                    <li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i>Login</a></li>
                                @endif
                                @if(!Request::is('auth/register'))
                                    <li><a href="{{ url('register') }}"><i class="fa fa-user"></i> Register</a></li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"> {{primeiroNome(auth()->user()->name)}}  <span class="caret"></span></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a class="backgroundBlue" href="{{ url('/logout') }}"><i class="fa fa-lock"></i>Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</header>
<hr class="hrstyle">
<section>
    <div class="container marginTop5">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <ul class="list-inline item-details">
                <li><a href="http://themifycloud.com">ThemifyCloud</a></li>
                <li><a href="http://themescloud.org">ThemesCloud</a></li>
            </ul>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> (27) 3029-7774</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> atendimento@institutodeselecao.com.br</a></li>
                            <li><a href="#"><i class="fa fa-gears"></i> Central de Atendimento – Av. Nossa Senhora da Penha 280, sala 205</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

</footer><!--/Footer-->



<script src="{{ url(elixir('js/all.js')) }}"></script>


@yield('post-script')

</body>
</html>
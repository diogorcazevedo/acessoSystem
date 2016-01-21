<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Correção Acesso</title>

    <link href="{{url(elixir('css/all.css'))}}" rel="stylesheet">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>



</head><!--/head-->

<body>

    <div class="header-middle-layout navbar-fixed-top"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="shop-menu pull-left">
                        <ul class="nav navbar-nav">
                                @if(auth()->guest())
                                    <li><a href="{{ route('layout.client')}}">Minhas correções</a></li>
                                @endif
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="logo pull-left">
                        <img class="img-responsive" src="{{url('img/logo.png')}}" alt="" />
                    </div>

                </div>
                <div class="col-sm-5">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <ul class="nav navbar-nav navbar-right">
                                @if(auth()->guest())
                                    @if(!Request::is('auth/login'))
                                        <li><a class="notbackground" href="{{ url('/login') }}"><i class="fa fa-user"></i> Login</a></li>
                                    @endif
                                    @if(!Request::is('auth/register'))
                                        <li><a class="notbackground" href="{{url('/register')}}">Registro</a></li>
                                    @endif
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="notbackground" href="{{ route('home')}}">Editar</a></li>
                                @endif
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

</header><!--/header-->



<section class="clearmargin">
    @yield('content')
</section>

<footer style="clear: both; margin-top: 10%;" id="footer"><!--Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015 Acesso Público. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="https://www.acessopublico.org.br/">ACESSO</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


    <!-- JavaScripts -->


        <script src="{{url(elixir('js/all.js'))}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>


</body>
</html>
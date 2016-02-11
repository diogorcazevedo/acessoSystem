<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Acesso Público</title>

    <link href="{{url(elixir('css/all.css'))}}" rel="stylesheet">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>


</head>
<!--/head-->

<body>

<div class="header-middle-layout navbar-fixed-top"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="shop-menu pull-left">
                    @if(Auth::user())
                        @if(Auth::user()->role == 'admin' or Auth::user()->role == 'coach' or Auth::user()->role == 'master')
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.layout.admin')}}" type="button"
                                       class="btn btn-blue">HOME</a>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        USUÁRIOS
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.users.index')}}">Listar Todos</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                         EDITAIS
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.sponsors.index')}}">Adminsitrações Públicas</a>
                                        </li>
                                        <li><a href="{{ route('admin.protocols.index')}}">Editais de Concurso</a></li>
                                        <li><a href="{{ route('admin.projects.index')}}">Projetos (concorrências)</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        PUBLICAÇÕES
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.deliverables.index')}}">Etapas do concurso</a></li>
                                        <li><a href="{{ route('admin.warnings.index')}}">Gerenciar avisos</a></li>
                                    </ul>
                                </div>


                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        ATENDIMENTOS
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.contacts.open')}}">Contatos abertos</a></li>
                                        <li><a href="{{ route('admin.contacts.index')}}">listar todos</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
            <div class="col-sm-1">
                <div class="logo pull-left">
                    <a href="{{route('admin.layout.admin')}}">
                        <img class="img-responsive" src="{{url('img/logo.png')}}" alt=""/>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="shop-menu pull-right">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Meus dados
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('admin.users.password',['id'=>auth()->user()->id])}}">Mudar Senha</a></li>
                                <li><a href="{{route('admin.users.edit',['id'=>auth()->user()->id])}}">Editar dados</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="{{ url('/logout') }}" type="button" class="btn btn-danger">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header-middle-->

</header><!--/header-->


<section class="clearmargin">
    @yield('content')
</section>

<footer style="clear: both; margin-top: 10%;" id="footer"><!--Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015 Acesso Público. All rights reserved.</p>

                <p class="pull-right">Designed by <span><a target="_blank" href="https://www.acessopublico.org.br/">ACESSO</a></span>
                </p>
            </div>
        </div>
    </div>

</footer>
<!--/Footer-->


<!-- JavaScripts -->


<script src="{{url(elixir('js/all.js'))}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>


</body>
</html>
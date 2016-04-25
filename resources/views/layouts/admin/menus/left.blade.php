<div class="col-lg-2 gray marpadzeroleft paddingrigthzero minheight">
    <div class="sidebar sidebar-nav navbar-collapse marpadzeroleft paddingrigthzero"
         id="bs-example-navbar-collapse-1">
        <div class="grav center"><img
                    src="http://www.gravatar.com/avatar/5fa9da59a9fdbfc3a08c75d8acc7d698?d=mm&amp;s=128"><a
                    href="https://www.gravatar.com"><span> change</span></a></div>
        <div class="user-info"></div>
        <a class="visit-site" href="http://demo.serverfire.net">Editar dados </a>
        <ul class="nav" id="side-menu">

            @can('sponsor_all')
                    <!--CADASTRO DO CONCURSO -->
            <li class="active">
                <a href="#demo1" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-sitemap fa-fw"></i> Gerenciar Concursos</a>
            </li>
            <ul class="collapse nav" id="demo1">
                <li class="s-link">
                    <a href="{{ route('bancas')}}"><i class="fa fa-plus-square fa-fw"></i> Novo Concurso</a>
                </li>
                <!--EDITAR CONCURSOS -->
                <li class="s-link">
                    <a href="#demo2" data-toggle="collapse" data-parent="#MainMenu"><i
                                class="fa fa-pencil-square fa-fw"></i> Editar Concursos</a>
                </li>
                    <ul class="collapse nav" id="demo2">
                        <li class="s-link ">
                            <a href="{{ route('bancas')}}"><i class="fa fa-pencil fa-fw"></i> Adm Públicas</a>
                        </li>
                        <li class="s-link ">
                            <a href="{{ route('admin.protocols.index')}}"><i class="fa fa-pencil fa-fw"></i> Editais de
                                Concurso</a>
                        </li>
                        <li class="s-link ">
                            <a href="{{ route('admin.projects.index')}}"><i class="fa fa-pencil fa-fw"></i> Inscrições
                                (concorrências)</a>
                        </li>
                        <li class="s-link">
                            <a href="#bank1" data-toggle="collapse" data-parent="#MainMenu"><i
                                        class="fa fa-pencil-square fa-fw"></i> Gerenciar Boletos</a>
                        </li>
                            <ul class="collapse nav" id="bank1">
                                <li class="s-link ">
                                    <a href="{{ route('admin.bradesco.index')}}"><i class="fa fa-pencil fa-fw"></i> Bradesco</a>
                                </li>
                                <li class="s-link ">
                                    <a href="{{ route('admin.bradesco.index')}}"><i class="fa fa-pencil fa-fw"></i> Itaú</a>
                                </li>
                                <li class="s-link ">
                                    <a href="{{ route('admin.bradesco.index')}}"><i class="fa fa-pencil fa-fw"></i> Santander</a>
                                </li>
                                <li class="s-link ">
                                    <a href="{{ route('admin.bradesco.index')}}"><i class="fa fa-pencil fa-fw"></i> Caixa</a>
                                </li>
                                <li class="s-link ">
                                    <a href="{{ route('admin.bradesco.index')}}"><i class="fa fa-pencil fa-fw"></i> B.B.</a>
                                </li>
                            </ul>
                    </ul>
                <!---->
            </ul>



            <!-- PUBLICAÇÕES E AVISOS -->

            <li class="active">
                <a href="#demo3" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-newspaper-o fa-fw"></i> Publicações e Avisos</a>
            </li>
            <ul class="collapse nav" id="demo3">
                <li class="s-link ">
                    <a href="{{ route('admin.deliverables.index')}}"><i class="fa fa-edit fa-fw"></i> Publicações do
                        concurso</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.warnings.index')}}"><i class="fa fa-edit fa-fw"></i> Gerenciar
                        avisos</a>
                </li>
            </ul>
            @endcan

                    <!--GERENCIAMENTO DE CANDIDATOS -->

            <li class="active">
                <a href="#demo4" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-user fa-fw"></i> Cadastro de Candidatos</a>
            </li>
            <ul class="collapse nav" id="demo4">
                <li class="s-link ">
                    <a href="{{ route('admin.deliverables.index')}}"><i class="fa fa-edit fa-fw"></i> Procurar
                        Candidato</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.warnings.index')}}"><i class="fa fa-edit fa-fw"></i> Cadastrar
                        Candidato</a>
                </li>
            </ul>

            <!--ATENDIMENTOS -->

            <li class="active">
                <a href="#demo5" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-headphones fa-fw"></i> Atendimentos</a>
            </li>
            <ul class="collapse nav" id="demo5">
                <li class="s-link ">
                    <a href="{{ route('admin.contacts.open')}}"><i class="fa fa-edit fa-fw"></i> Responder</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.contacts.index')}}"><i class="fa fa-edit fa-fw"></i> listar todos</a>
                </li>
            </ul>
        </ul>
        <br/>
        <br/>
        <br/>
        <br/>
        <ul class="nav" id="side-menu">

            @can('sponsor_all')

            <!-- BANCO DE QUESTÕES -->

            <li class="active">
                <a href="#banco1" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-newspaper-o fa-fw"></i> Banco de questões</a>
            </li>
            <ul class="collapse nav" id="banco1">
                <li class="s-link ">
                    <a href="{{ route('admin.deliverables.index')}}"><i class="fa fa-edit fa-fw"></i> Publicações do
                        concurso</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.warnings.index')}}"><i class="fa fa-edit fa-fw"></i> Gerenciar
                        avisos</a>
                </li>
            </ul>
            @endcan

                    <!--GERENCIAMENTO DE CANDIDATOS -->

            <li class="active">
                <a href="#banco2" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-user fa-fw"></i> Banco 2</a>
            </li>
            <ul class="collapse nav" id="banco2">
                <li class="s-link ">
                    <a href="{{ route('admin.deliverables.index')}}"><i class="fa fa-edit fa-fw"></i> Procurar
                        Candidato</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.warnings.index')}}"><i class="fa fa-edit fa-fw"></i> Cadastrar
                        Candidato</a>
                </li>
            </ul>
            <!--Logo -->
            <li class="active">
                <a class="pull-left" href="{{route('admin.layout.admin')}}">
                    <img class="img-responsive" src="{{url('img/logo_bar_footer.png')}}" alt="" width="80"/>
                </a>
            </li>
        </ul>
    </div>
</div>
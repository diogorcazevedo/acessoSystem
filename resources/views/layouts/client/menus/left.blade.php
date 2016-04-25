<div class="col-lg-2 gray marpadzeroleft paddingrigthzero minheight">
    <div class="sidebar sidebar-nav navbar-collapse marpadzeroleft paddingrigthzero"
         id="bs-example-navbar-collapse-1">
        <div class="grav center"><img
                    src="http://www.gravatar.com/avatar/5fa9da59a9fdbfc3a08c75d8acc7d698?d=mm&amp;s=128"><a
                    href="https://www.gravatar.com"><span> change</span></a></div>
        <div class="user-info"></div>
        <a class="visit-site" href="http://demo.serverfire.net">Editar dados </a>
        <ul class="nav" id="side-menu">


            <!--CADASTRO DO CONCURSO -->
            <li class="active">
                <a href="#demo1" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-dashboard fa-fw"></i> Cadastro de Concursos</a>
            </li>
            <ul class="collapse nav" id="demo1">
                <li class="s-link ">
                    <a href="{{ route('bancas')}}"><i class="fa fa-edit fa-fw"></i> Adm Públicas</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.protocols.index')}}"><i class="fa fa-edit fa-fw"></i> Editais de
                        Concurso</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.projects.index')}}"><i class="fa fa-edit fa-fw"></i> Projetos
                        (concorrências)</a>
                </li>
            </ul>

            <!-- PUBLICAÇÕES E AVISOS -->

            <li class="active">
                <a href="#demo3" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="fa fa-newspaper-o fa-fw"></i> Publicações e Avisos</a>
            </li>
            <ul class="collapse nav" id="demo3">
                <li class="s-link ">
                    <a href="{{ route('admin.deliverables.index')}}"><i class="fa fa-edit fa-fw"></i> Etapas do
                        concurso</a>
                </li>
                <li class="s-link ">
                    <a href="{{ route('admin.warnings.index')}}"><i class="fa fa-edit fa-fw"></i> Gerenciar
                        avisos</a>
                </li>
            </ul>

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
            <!--GERENCIAMENTO DE CANDIDATOS -->

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
    </div>
</div>
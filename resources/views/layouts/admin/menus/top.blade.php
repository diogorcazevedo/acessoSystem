<div class="header-middle-layout navbar-fixed-top"><!--header-middle-->
    <div class="col-lg-offset-2 col-lg-10">
        <div class="col-sm-offset-1 col-sm-10">
            @if(Auth::user())
                @if(Auth::user()->role == 'admin' or Auth::user()->role == 'coach' or Auth::user()->role == 'master')
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.layout.admin')}}" type="button"
                               class="btn btn-default"><i class="fa fa-home"></i></a>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn gray dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                USUÁRIOS
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('admin.users.index')}}">Listar Todos</a></li>
                            </ul>
                        </div>

                        @can('permissions_all')
                        <div class="btn-group" role="group">
                            <button type="button" class="btn gray dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                PERMISSÕES
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                @can('manager_admin')
                                <li><a href="{{ route('admin.managers.index')}}">Nível Usuários</a></li>
                                <br/>
                                @endcan
                                @can('role_admin')
                                <li><a href="{{ route('admin.roles.index')}}">Níveis</a></li>
                                <br/>
                                @endcan
                                @can('permission_admin')
                                <li><a href="{{ route('admin.permissions.index')}}">Permissões</a></li>
                                <br/>
                                @endcan
                            </ul>
                        </div>
                        @endcan
                        <div class="btn-group" role="group">
                            <button type="button" class="btn gray dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> {{primeiroNome(auth()->user()->name)}}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('admin.users.password',['id'=>auth()->user()->id])}}">Mudar
                                        Senha</a></li>
                                <li><a href="{{route('admin.users.edit',['id'=>auth()->user()->id])}}">Editar dados</a>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="{{ url('/logout') }}" type="button" class="btn btn-default">Sair</a>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
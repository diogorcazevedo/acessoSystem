<div class="header-middle-layout navbar-fixed-top"><!--header-middle-->
    <div class="col-lg-offset-2 col-lg-10">
        <div class="col-lg-8">
            <div class="shop-menu pull-left col-lg-12">
                <div class="btn-group col-lg-1" role="group">
                    <a href="{{ route('layout.client')}}" type="button"
                       class="btn gray"><i class="fa fa-home"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="logo pull-left">
                <a href="{{route('admin.layout.admin')}}">
                    <img class="img-responsive" src="{{url('img/logo.png')}}" alt=""/>
                </a>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="shop-menu pull-right">
                <div class="btn-group" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn gray dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
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
                        <a href="{{ url('/logout') }}" type="button" class="btn btn-orange-destack">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
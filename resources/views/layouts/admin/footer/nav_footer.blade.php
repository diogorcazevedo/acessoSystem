<div class="header-middle-layout navbar-fixed-bottom"><!--header-middle-->
    <div class="col-lg-offset-2 col-lg-10">
        <div class="col-sm-offset-1 col-sm-8">
            @if(Auth::user())
                @if(Auth::user()->role == 'admin' or Auth::user()->role == 'coach' or Auth::user()->role == 'master')
                    <div class="btn-group" role="group" aria-label="...">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                @endif
            @endif
        </div>
        <div class="col-lg-offset-1 col-sm-2 pull-right">
            <div class="logo pull-left">
                <a href="{{route('admin.layout.admin')}}">
                    <img class="img-responsive" src="{{url('img/logo.png')}}" alt=""/>
                </a>
            </div>
        </div>

    </div>
</div>
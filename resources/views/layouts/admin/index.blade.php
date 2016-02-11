@extends('layouts.admin.app')

@section('content')
    @if(Auth::user()->role == 'admin')
        @if(Session::has('success'))
            <div style="margin-top: 5%; margin-bottom: 5%;" class="col-sm-12 padding-right">
                <div class="features_items">
                    <ul class="list-group">
                        <li class="list-group-item listback text-center">{{Session::get('success')}}</li>
                    </ul>
                </div>
            </div>
            {{Session::forget('success')}}
        @endif

        <div style="margin-top: 5%; margin-bottom: 5%;" class="container-fluid">
            <div class="content wellwhite col-lg-12">
                <div class="shop-menu">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                INSCRIÇÕES
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                <br/>
                                <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BOLETOS
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ISENÇÕES
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RECURSOS
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ALOCAÇÃO
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                OBJETIVA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                DISCURSIVA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                FÍSICA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PRÁTICA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                TÍTULOS
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TODOS OS EDITAIS</a></li>
                                @foreach($protocols as $protocol)
                                    <br/>
                                    <li><a href="#">{{$protocol->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- <div class="container">
            @foreach($protocols as $protocol)
                <div class="wellwhite well-sm col-lg-4" style="height: 150px;">

                        <div class="col-lg-3">
                            @foreach($protocol->files as $file)
                                @if($file->type == 1)
                                    <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-offset-1 col-lg-6">
                            <p>{{$protocol->name}}</p>
                            <p> <a href="#" class="btn btn-sm btn-warning">acessar</a></p>
                        </div>

                </div>
            @endforeach
        </div>-->
    @endif
@endsection
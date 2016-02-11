@extends('layouts.client.app')

@section('content')
    @if(Auth::user()->role == 'client')
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

        <div style="margin-top: 8%; margin-bottom: 5%;" class="container-fluid">
            <div class="content well col-lg-12">
                <div style="width: 50%; margin-bottom: 2%;" class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-blue">Gerenciar meus concursos (inscrições já realizadas)</button>
                    </div>
                </div>
                <div class="shop-menu">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CARGOS
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


        <!-- inscricoes -->
        <div class="container-fluid">
            <div class="col-lg-2">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Concursos
                    </a>
                    @foreach($all as $regulament)
                        <a href="{{route('home.publish',['id'=>$regulament->id])}}"
                           class="list-group-item">{{$regulament->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="wellwhite well-sm col-lg-offset-1 col-lg-8">
                <div style="margin-bottom: 2%;" class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-blue">Novas Inscrições</button>
                        <p style="float: left;">OBS: Caso o candidato já tenha realizado inscrição para o cargo, use as opções acima. O Sistema não permite duas inscrições para o mesmo cargo</p>
                    </div>
                </div>
                @forelse($protocols as $protocol)
                    <h4 class="wellwhite">Inscrições Abertas:</h4>
                    <div class="well well-sm col-lg-6">
                        <div class="wellwhite well-sm col-lg-12">
                            <div class="col-lg-3">
                                @foreach($protocol->files as $file)
                                    @if($file->type == 1)
                                        <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-lg-9">
                                <h4 class="well">
                                    {{$protocol->name}}<br/>
                                    <small>{{$protocol->description}}</small>
                                </h4>
                                @foreach($protocol->projects as $projects)
                                    <p class="wellwhite">
                                        {{$projects->name}}<br/>
                                        <small>{{$projects->description}}</small>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="wellwhite">Sem inscrições abertas no momento</h4>
                @endforelse
            </div>
        </div>
    @endif
@endsection
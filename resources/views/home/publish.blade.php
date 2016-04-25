@extends('app')

@section('content')
        <div class="col-lg-6">
            <section>
                <h2 class="meio">CONCURSOS</h2>
                <hr class="hrstyle">
                <div class="col-lg-offset-1 col-lg-11 wellwhite well-sm">

                    <div class="panel panel-default">
                        <div class="panel panel-heading">

                                @foreach($protocol->files as $file)
                                    @if($file->type == 1)
                                        <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"
                                             width="70" height="60"/>
                                    @endif
                                @endforeach
                                    <a><b>{{$protocol->name}}</b></a>
                                    <p> <small>{{$protocol->description}}</small></p>
                        </div>
                        <div class="panel panel-body">
                            <article>
                                @foreach($protocol->projects as $project)
                                    <div class="wellwhite">
                                        <p><b>Concurso: {{$project->name}}</b><p/>
                                        <p>Nível de escolaridade: {{$project->schooling}}<p/>
                                        <p>Descrição:  {{$project->description}}</p>
                                        @if($protocol->status == 1)
                                            <p>Taxa de inscrição: {{$project->tax}}<p/>
                                            @if(auth()->guest())
                                            <p><a href="{{ route('registers.create',['id'=>$project->id])}}" class="btn btn-sm btn-orange">Cadastro e inscrição</a></p>
                                            <p><a href="{{ route('registers.login',['id'=>$project->id])}}" class="btn btn-sm btn-primary">Já possuo cadastro</a></p>
                                            @else
                                             <p><a href="{{ route('Project',['id'=>$project->id])}}" class="btn btn-sm btn-orange">inscrição</a></p>
                                            @endif
                                        @endif
                                    </div>
                                @endforeach
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- publicacoes -->
        <div class="col-lg-offset-1 col-lg-5">
            <div class="row">
                <h2 class="meio">PUBLICAÇÕES</h2>
                <hr class="hrstyle">
                @if(!empty($publishs))
                        <!-- publicacoes -->
                <div class="col-lg-11">
                    <section>
                        @foreach($publishs as $publish)
                            <div class="wellwhite well-sm col-lg-12">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel panel-heading">
                                            <article>
                                                <p>{{$publish->name}}</p>
                                            </article>
                                        </div>
                                        <div class="panel panel-body">
                                            <article>
                                                @foreach($publish->files as $file)
                                                    <a href="{{url('uploads/deliverables/'.$file->id.'.'.$file->extension)}}"
                                                       download>
                                                        <p class="wellwhite">{{$file->name}}</p>
                                                    </a>
                                                @endforeach
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
                @endif
            </div>
        </div>

    <!-- Rodapé -->
    <div class="seta2"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #f0f0f0;">
                <section>
                    <h2 class="meio">
                        EXPERIÊNCIA EM CONCURSOS PÚBLICOS NAS MAIS DIVERSAS ÁREAS DO CONHECIMENTO
                    </h2>

                    <div class="col-lg-offset-2 col-lg-3">
                        <ul style="float: left;">
                            <li class="canal-espaco">Executivo</li>
                            <li class="canal-espaco">Legislativo</li>
                            <li class="canal-espaco">Judiciário</li>
                            <li class="canal-espaco">Terceiro Setor</li>
                        </ul>

                    </div>
                    <div class="col-lg-3">

                        <ul style="float: left; margin-left: 30%;">
                            <li class="canal-espaco">Segurança Pública</li>
                            <li class="canal-espaco">Educação</li>
                            <li class="canal-espaco">Administração</li>
                            <li class="canal-espaco">Justiça</li>
                        </ul>

                    </div>
                    <div class=" col-lg-4">

                        <img src="{{url('img/home/comercial.png')}}">

                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="seta2"></div>



@endsection

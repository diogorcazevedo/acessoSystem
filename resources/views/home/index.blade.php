@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bannerbackground">
                <section>
                    <div class="col-lg-offset-1 col-lg-6">
                        <h4 class="cabec1">PROCESSOS SELETIVOS, CONCURSOS PÚBLICOS E VESTIBULARES DE ALTA
                            COMPLEXIDADE</h4>
                    </div>

                    <div class="col-lg-5 folder">
                        <img class="img-responsive" src="{{url('img/home/folder.png')}}" width="60%"/>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="seta"></div>
    <div class="container-fluid">
        <!-- Editais -->
        <div class="col-lg-offset-1 col-lg-7">
            <div class="row">
                @if(!empty($opens))

                        <!-- Abertos -->
                <div class="col-lg-12">
                    <section>
                        <h2 class="meio">INSCRIÇÕES ABERTAS</h2>
                        <hr class="hrstyle">
                        @foreach($opens as $open)
                            <div class="wellwhite well-sm col-lg-12">
                                <div class="col-lg-3">
                                    @foreach($open->files as $file)
                                        @if($file->type == 1)
                                    <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-8">
                                    <a href="#">
                                        <h4>
                                            {{$open->name}}<br/>
                                            <small>{{$open->description}}</small>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
                @endif
                @if(!empty($publishs))
                        <!-- publicacoes -->
                <div class="col-lg-12">
                    <section>
                        <h2 class="meio">PUBLICAÇÕES DOS CONCURSOS EM ANDAMENTO</h2>
                        <hr class="hrstyle">
                        @foreach($publishs as $publish)
                            <div class="wellwhite well-sm col-lg-12">
                                <div class="col-lg-3">
                                    @foreach($publish->files as $file)
                                        @if($file->type == 1)
                                            <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-8">
                                    <a href="{{route('home.publish',['id'=>$publish->id])}}">
                                        <h4>
                                            {{$publish->name}}<br/>
                                            <small>{{$publish->description}}</small>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
                @endif
            </div>
        </div>
        <div class="col-lg-3">
            <section>
                <blockquote>
                <h2 class="meio">Avisos:</h2>
                </blockquote>
                @if(!empty($warnings))
                    @foreach($warnings as $warning)
                        <div class="col-lg-offset-1 col-lg-11 wellwhite well-sm">
                            <div class="col-lg-3">
                                @foreach($warning->files as $file)
                                    @if($file->type == 1)
                                        <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-lg-8">
                                <a href="#">
                                    <h4>
                                        {{$warning->name}}<br/>
                                        <small>{{$warning->description}}</small>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif

           </section>
        </div>
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

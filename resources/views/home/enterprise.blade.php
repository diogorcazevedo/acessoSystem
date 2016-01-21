@extends('app')

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 bannerbackground">
            <section>
                <div class="col-lg-offset-1 col-lg-6">
                    <h2 class="cabec1">GRUPO ACESSO PÚBLICO</h2>

                    <h3 class="cabec2 text-justify">Mais de 16 anos de existência,
                        com atuação em todas regiões do país, especializou-se em Processos Seletivos, Avaliações de
                        Proficiência,
                        Concursos Públicos de altíssima complexidade</h3>
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
        <div class="row">
            <section class="endereco">
                <h2 class="meio">NOSSA HISTÓRIA</h2>

                <div class="col-lg-3">
                    <img class="img-responsive" src="{{url('img/home/acessocolmeia.png')}}">
                </div>
                <div class="col-lg-offset-1 col-lg-7">
                    <article>
                        <a href="#">
                            <h2 class="meio2">Fundado em 11 de abril de 1997 </h2>

                            <div class="canal-espaco"><p class="text-justify">Experiência em projetos para o Governo
                                    Federal,
                                    Governos Estaduais, Prefeituras,
                                    Empresas Públicas, como também entidades do terceiro setor.</p></div>
                            <div class="canal-espaco"><p class="text-justify">Com uma equipe experiente e altamente
                                    especializada em seleção de pessoal,
                                    possuímos um histórico de muito sucesso nos certames que administramos.</p></div>
                        </a>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <div class="seta3"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #f0f0f0;">
                <section>
                    <h2 class="meio">EXCELÊNCIA EM GESTÃO DE PROCESSOS SELETIVOS DE ALTA COMPLEXIDADE</h2>

                    <div class="col-lg-offset-2 col-lg-6">
                        <div class="canal-espaco">
                            <p class="text-justify">
                                O Acesso Público caracteriza-se pelo empenho na busca por excelência em tudo o que
                                fazemos

                            </p>
                        </div>
                        <div class="canal-espaco">
                            <p class="text-justify">
                                A excelência é o resultado da combinação de competência técnica,
                                conhecimento aplicado, foco na relevância e capacidade inovadora, impulsionados por
                                incansável esforço de superação.
                            </p>
                        </div>

                        <div class="canal-espaco">
                            <p class="text-justify">
                                Trabalhamos com foco na inovação.
                            </p>
                        </div>

                        <div class="canal-espaco">
                            <p class="text-justify">
                                Valorizamos o trabalho em equipe, o compartilhamento dos conhecimentos e das
                                experiências e a cooperação.
                            </p>
                        </div>
                        <div class="canal-espaco">
                            <p class="text-justify">
                                Buscamos a qualidade, a consistência e a efetividade das ações por meio de decisões
                                compartilhadas.
                            </p>
                        </div>
                        <div class="canal-espaco" style="margin-bottom: 4%;">
                            <p class="text-justify">
                                Estimulamos o sentimento de realização profissional e pessoal na equipe do Instituto
                                Acesso pelo reconhecimento de suas contribuições.
                            </p>
                        </div>

                    </div>
                    <div class=" col-lg-2">
                        <img src="{{url('img/home/feature-4.png')}}">
                        <img src="{{url('img/home/feature-5.png')}}">

                    </div>
                    <div class=" col-lg-2">
                        <img src="{{url('img/home/feature-6.png')}}">
                        <img src="{{url('img/home/feature-2.png')}}">
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="seta2"></div>



@endsection

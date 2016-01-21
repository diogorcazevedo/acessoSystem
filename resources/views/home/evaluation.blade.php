@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bannerbackground">
                <section>
                    <div class="col-lg-offset-1 col-lg-6">
                        <h2 class="cabec1">AVALIAÇÃO</h2>

                        <h3 class="cabec2 text-justify">Primamos por construir um ambiente de trabalho marcado por
                            respeito,
                            pluralidade de pensamentos, diálogo e capacidade de se colocar no lugar do outro.</h3>
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
                <h2 class="meio">ÚLTIMOS PROJETOS</h2>

                <div class="col-lg-offset-1 col-lg-3">
                    <img class="img-responsive" src="{{url('img/home/provas.png')}}">
                </div>

                <div class="col-lg-offset-1 col-lg-3">
                    <h2 class="meio2" style="margin-bottom: 6%;">PROVAS APLICADAS</h2>
                    <article>


                        <p><a href="{{url('img/provasanteriores/prova-motorista_cbmerj.pdf')}}"
                              download="SoldadoMotorista">. CBMERJ 2012 Prova Soldado Motorista</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-piloto-helicoptero_cbmerj.pdf')}}"
                              download="Piloto">. CBMERJ 2013 Prova Piloto Helicóptero</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-combatente_cbmerj.pdf')}}"
                              download="SoldadoCombatente">. CBMERJ 2014 Prova Soldado Combatente</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-tecnico-de-enfermagem_cbmerj.pdf')}}"
                              download="TecnicoEnfermagem">. CBMERJ 2014 Prova Técnico de Enfermagem</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-fiscal-ambiental-n.pdf')}}"
                              download="FiscalAmbiental">. Prova Fiscal Ambiental</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-fiscal-de-tributos-n.pdf')}}"
                              download="FiscalTributos">. Prova Fiscal de Tributos</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-guarda-ambiental-n.pdf')}}"
                              download="GuardaAmbiental">. Prova Guarda Ambiental</a></p>

                        <p><a href="{{url('img/provasanteriores/prova-guarda-municipal-n.pdf')}}"
                              download="GuardaMunicipalNilopolis">. Prova Guarda Municipal</a></p>


                    </article>
                </div>
                <div class="col-lg-3" style="margin-bottom: 8%;">
                    <h2 class="meio2" style="margin-bottom: 6%;">OUTRAS AVALIAÇÕES</h2>
                    <article>


                        <p><a href="{{url('img/provasanteriores/gabarito_analista_vv.pdf')}}" download="Analista">.
                                Prova Analista Público de Gestão</a></p>

                        <p><a href="{{url('img/provasanteriores/gabarito_auditorI_vv.pdf')}}"
                              download="AuditorContabeis">. Prova Auditor I - Ciências Contábeis</a></p>

                        <p><a href="{{url('img/provasanteriores/gabarito_auditorII_vv.pdf')}}"
                              download="AuditorEngenharia">. Prova Auditor II - Engenharia</a></p>

                        <p><a href="{{url('img/provasanteriores/gabarito_especialista_vv.pdf')}}"
                              download="Especialista">. Prova Especialista em Controladoria Pública</a></p>

                        <p><a href="{{url('img/provasanteriores/procuradoria_vv.pdf')}}" download="Procuradoria">.
                                Procuradoria</a></p>

                        <p><a href="{{url('img/provasanteriores/gabarito_guarda_vv.pdf')}}"
                              download="GuardaMunicipalVilaVelha">. Guarda Municipal Vila Velha</a></p>

                        <p><a href="{{url('img/provasanteriores/cmrj.zip.pdf')}}">. Colégio Militar Rio de Janeiro -
                                CBMERJ</a></p>

                        <p><a href="{{url('img/provasanteriores/sesi.pdf.pdf')}}">. SESI - EBEP</a></p>


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

@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
            <!-- Editais -->
            <div class="col-lg-5">
                <div class="row">
                    @if(count($opens) !=0)
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
                                        <h4>
                                            {{$open->name}}<br/>
                                            <small>{{$open->description}}</small>
                                        </h4>
                                        <p>
                                            <a href="{{route('home.publish',['id'=>$open->id])}}" class="btn btn-blue">Inscrição</a>
                                        </p>

                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                    @endif
                    @if(count($publishs) != 0)
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
                                        <h4>
                                            {{$publish->name}}<br/>
                                            <small>{{$publish->description}}</small>
                                        </h4>
                                        <p>
                                            <a href="{{route('home.publish',['id'=>$publish->id])}}"
                                               class="btn btn-warning">editais e publicações</a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">
                        @if(count($warnings) != 0)
                            <section>
                                <h2 class="meio">Mural</h2>
                                <br/>
                                <hr class="hrstyle">
                                @foreach($warnings as $warning)
                                    <div class="col-lg-offset-1 col-lg-11 wellwhite well-sm">
                                        <div class="col-lg-3">
                                            @foreach($warning->protocol->files as $file)
                                                @if($file->type == 1)
                                                    <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"
                                                         width="60" height="60"/>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-8">
                                            <a href="{{route('home.publish',['id'=>$warning->protocol->id])}}">
                                                <p>{{$warning->name}}</p>
                                                <p>
                                                    <small>{{$warning->description}}</small>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </section>
                        @endif
                        @if(count($finishs) != 0)
                            <section>
                                <h2 class="meio">FINALIZADOS</h2>
                                <hr class="hrstyle">
                                @foreach($finishs as $finish)
                                    <div class="col-lg-offset-1 col-lg-11 wellwhite well-sm">
                                        <div class="col-lg-3">
                                            @foreach($finish->files as $file)
                                                @if($file->type == 1)
                                                    <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"
                                                         width="60" height="60"/>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-8">
                                            <a href="{{route('home.publish',['id'=>$finish->id])}}">
                                                <p>
                                                    {{$finish->name}}<br/>
                                                    <small>{{$finish->description}}</small>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </section>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <section>
                            <h2 class="meio">REPOSITÓRIO DE PROVAS</h2>
                            <hr class="hrstyle">

                            <div id="form-concursos">
                                <div class="col-lg-12 well well-sm backgroundGray">
                                    {!! Form::open([route('home.publish',['id'=>$publish->id])]) !!}

                                    @include('_form')

                                    <div class="form-group">

                                        {!! Form::submit('buscar',['class'=>'btn btn-primary']) !!}
                                    </div>


                                    {!! Form::close()!!}

                                    <form class="form-horizontal well well-sm" role="form" method="POST"
                                          action="{{ url('/produc/login') }}">
                                        {!! csrf_field() !!}

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">nome do concurso</label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email"
                                                       value="{{ old('email') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Vagas</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="vagas">
                                                    <option class="muted" value="">Vagas</option>
                                                    <option value="0-10">0 - 10</option>
                                                    <option value="11-50">11 - 50</option>
                                                    <option value="51-200">51 - 200</option>
                                                    <option value="201-500">201 - 500</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Vagas</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="vagas">
                                                    <option class="muted" value="">UF</option>
                                                    <option value="2">AC</option>
                                                    <option value="1">A Definir</option>
                                                    <option value="3">AL</option>
                                                    <option value="5">AP</option>
                                                    <option value="4">AM</option>
                                                    <option value="6">BA</option>
                                                    <option value="7">CE</option>
                                                    <option value="8">DF</option>
                                                    <option value="9">ES</option>
                                                    <option value="10">GO</option>
                                                    <option value="11">MA</option>
                                                    <option value="14">MT</option>
                                                    <option value="13">MS</option>
                                                    <option value="12">MG</option>
                                                    <option value="15">PA</option>
                                                    <option value="16">PB</option>
                                                    <option value="19">PR</option>
                                                    <option value="17">PE</option>
                                                    <option value="18">PI</option>
                                                    <option value="20">RJ</option>
                                                    <option value="21">RN</option>
                                                    <option value="24">RS</option>
                                                    <option value="22">RO</option>
                                                    <option value="23">RR</option>
                                                    <option value="25">SC</option>
                                                    <option value="27">SP</option>
                                                    <option value="26">SE</option>
                                                    <option value="28">TO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Vagas</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="vagas">
                                                    <option class="muted" value="">Salário</option>
                                                    <option value="700-2000">R$ 700 - R$ 2000</option>
                                                    <option value="2001-5000">R$ 2001 - R$ 5000</option>
                                                    <option value="5001-10000">R$ 5001 - R$ 10000</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Vagas</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="vagas">
                                                    <option class="muted" value="">Escolaridade</option>
                                                    <option value="32">A Definir</option>
                                                    <option value="31">Aquaviário</option>
                                                    <option value="23">Curso técnico</option>
                                                    <option value="29">Não exigida</option>
                                                    <option value="27">Nível Alfabetizado</option>
                                                    <option value="24">Nível Fundamental</option>
                                                    <option value="26">Nível Fundamental Incompleto</option>
                                                    <option value="33">Nivel Médio</option>
                                                    <option value="28">Nível Médio Incompleto</option>
                                                    <option value="22">Nível Superior</option>
                                                    <option value="30">Nível Superior Incompleto</option>
                                                    <option value="25">Tecnológico</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">Procurar</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

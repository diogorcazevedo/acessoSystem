@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('registers.store')}}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">CPF</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" data-mask ="000.000.000-00", placeholder="999.999.999-99">

                                    @if ($errors->has('cpf'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Identidade</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="111.111.111-1">

                                    @if ($errors->has('identity'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('identity') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Orgão Expedidor</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="dispatcher" value="{{ old('dispatcher') }}" placeholder="ex: DETRAN-RJ">

                                    @if ($errors->has('dispatcher'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dispatcher') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Confirmar Senha</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--  -->
                            <hr class="hrstyle">
                            <h4 class="text-center">Dados Pessoais</h4>
                            <hr class="hrstyle">
                            <!--  -->

                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Data de Nascimento</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="birthdate" value="{{ old('birthdate') }}" data-mask="00-00-0000",placeholder="00-00-0000">

                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Sexo</label>

                                <div class="col-md-6">
                                    <label class="radio-inline">{{ Form::radio('gender', 'M') }}Masculino</label>
                                    <label class="radio-inline">{{ Form::radio('gender', 'F') }}Feminino</label>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('maritalstatus') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Estado Civil</label>

                                <div class="col-md-6">
                                    <label class="radio-inline">{{ Form::radio('maritalstatus', 'solteiro') }}solteiro</label>
                                    <label class="radio-inline">{{ Form::radio('maritalstatus', 'casado') }}casado</label>
                                    <label class="radio-inline">{{ Form::radio('maritalstatus', 'divorciado') }}divorciado</label>
                                    <label class="radio-inline">{{ Form::radio('maritalstatus', 'união estável') }}união estável</label>

                                    @if ($errors->has('maritalstatus'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('maritalstatus') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Mãe</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="mother" value="{{ old('mother') }}">

                                    @if ($errors->has('mother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Pai</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="father" value="{{ old('father') }}">

                                    @if ($errors->has('father'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('father') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Nacionalidade</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}">

                                    @if ($errors->has('nationality'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('naturality') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Natural</label>

                                <div class="col-md-3">
                                    {{ Form::select('naturality', arrayestados(), null, array('class' => 'form-control')) }}

                                    @if ($errors->has('naturality'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('naturality') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('children') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Filhos</label>

                                <div class="col-md-4">
                                    {{ Form::select('children', arrayfilhos(), null, array('class' => 'form-control', 'value'=>old('children'))) }}
                                    @if ($errors->has('children'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('children') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">CEP</label>

                                <div class="col-md-3">
                                    <input type="text" id="cep" class="form-control" name="zipcode" value="{{ old('zipcode') }}" data-mask="00.000-000">

                                    @if ($errors->has('zipcode'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Telefone Fixo</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('cel') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Celular</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="cel" value="{{ old('cel') }}">

                                    @if ($errors->has('cel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Endereço</label>

                                <div class="col-md-6">
                                    <input type="text" id="rua" class="form-control" name="address" value="{{ old('address') }}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('complement') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Complemento</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="complement" value="{{ old('complement') }}">

                                    @if ($errors->has('complement'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('complement') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Bairro</label>

                                <div class="col-md-6">
                                    <input type="text" id="bairro" class="form-control" name="neighborhood" value="{{ old('neighborhood') }}">

                                    @if ($errors->has('neighborhood'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('neighborhood') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Cidade</label>

                                <div class="col-md-6">
                                    <input type="text" id="cidade" class="form-control" name="city" value="{{ old('city') }}">

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Estado</label>

                                <div class="col-md-3">
                                    {{ Form::select('state', arrayestados(), null, array('class' => 'form-control','id'=>'uf')) }}

                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {!! Form::hidden('project_id', $id) !!}


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-orange">
                                       Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

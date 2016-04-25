<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('nome',mb_strtoupper(removerAcentor($user->name)),['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('NIS','NIS:') !!}
    {!! Form::text('nis',null,['class'=>'form-control','required' => 'required','data-mask'=>"00000000000"]) !!}
</div>


<!--client-->
<div class="form-group">
    {!! Form::label('Data de Nascimento','birthdate:') !!}
    {!! Form::text('datadenascimento',birthdate($user->client->birthdate),['class'=>'form-control','required' => 'required','data-mask'=>"00000000",'placeholder'=>"00000000"]) !!}
</div>


<hr>

<label class="radio-inline">{{ Form::radio('sexo', 'M') }}Masculino</label>
<label class="radio-inline">{{ Form::radio('sexo', 'F') }}Feminino</label>

<hr>

<div class="form-group">
    {!! Form::label('Identidade','Identidade:') !!}
    {!! Form::text('num_identid_rg',$user->identity,['class'=>'form-control','required' => 'required','placeholder'=>"1111111111"]) !!}
</div>


<div class="form-group">
    {!! Form::label('Data de Identidade','Data de Identidade:') !!}
    {!! Form::text('dt_identid_rg',null,['class'=>'form-control','required' => 'required','data-mask'=>"00000000",'placeholder'=>"00000000"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Orgão Expedidor','Orgão Expedidor:') !!}
    {!! Form::text('sg_em_identid_rg',$user->dispatcher,['class'=>'form-control','required' => 'required','placeholder'=>"ex: DETRAN RJ"]) !!}
</div>

<div class="form-group">
    {!! Form::label('CPF','CPF:') !!}
    {!! Form::text('cpf',$user->cpf,['class'=>'form-control','required' => 'required','data-mask'=>"00000000000",'placeholder'=>"99999999999"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Mãe','Mãe:') !!}
    {!! Form::text('nomedamae',mb_strtoupper(removerAcentor($user->client->mother)),['class'=>'form-control','required' => 'required']) !!}
</div>

{!! Form::hidden('user_id', $user->id) !!}

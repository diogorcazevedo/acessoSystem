<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('user[name]',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email','Email:') !!}
    {!! Form::email('user[email]',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('CPF','CPF:') !!}
    {!! Form::text('user[cpf]',null,['class'=>'form-control','required' => 'required','data-mask'=>"000.000.000-00",'placeholder'=>"999.999.999-99"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Identidade','Identidade:') !!}
    {!! Form::text('user[identity]',null,['class'=>'form-control','required' => 'required','placeholder'=>"111.111.111-1"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Orgão Expedidor','Orgão Expedidor:') !!}
    {!! Form::text('user[dispatcher]',null,['class'=>'form-control','required' => 'required','placeholder'=>"ex: DETRAN-RJ"]) !!}
</div>
<!--client-->
<div class="form-group">
    {!! Form::label('Data de Nascimento','birthdate:') !!}
    {!! Form::text('birthdate',birthdate($client['birthdate']),['class'=>'form-control','required' => 'required','data-mask'=>"00-00-0000",'placeholder'=>"00-00-0000"]) !!}
</div>

<hr>

<label class="radio-inline">{{ Form::radio('gender', 'M') }}Masculino</label>
<label class="radio-inline">{{ Form::radio('gender', 'F') }}Feminino</label>

<hr>
<label class="radio-inline">{{ Form::radio('maritalstatus', 'solteiro') }}solteiro</label>
<label class="radio-inline">{{ Form::radio('maritalstatus', 'casado') }}casado</label>
<label class="radio-inline">{{ Form::radio('maritalstatus', 'divorciado') }}divorciado</label>
<label class="radio-inline">{{ Form::radio('maritalstatus', 'união estável') }}união estável</label>

<hr>
<div class="form-group">
    {!! Form::label('Mãe','Mãe:') !!}
    {!! Form::text('mother',null,['class'=>'form-control','required' => 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Pai','Pai:') !!}
    {!! Form::text('father',null,['class'=>'form-control','required' => 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Nacionalidade','Nacionalidade:') !!}
    {!! Form::text('nationality',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Natural','Natural:') !!}
    {{ Form::select('naturality', arrayestados(), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {!! Form::label('Filhos','Filhos:') !!}
    {{ Form::select('children', arrayfilhos(), null, array('class' => 'form-control')) }}
</div>


<div class="form-group">
    {!! Form::label('Phone','Telefone:') !!}
    {!! Form::text('phone',null,['class'=>'form-control','required' => 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Cel','Telefone Celular:') !!}
    {!! Form::text('cel',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Address','Endereço:') !!}
    {!! Form::text('address',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Complemento','Complemento:') !!}
    {!! Form::text('complement',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Bairro','Bairro:') !!}
    {!! Form::text('neighborhood',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('City','Cidade:') !!}
    {!! Form::text('city',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('State','Estado:') !!}
    {{ Form::select('state', arrayestados(), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {!! Form::label('Zipcode','CEP:') !!}
    {!! Form::text('zipcode',null,['class'=>'form-control','data-mask'=>"00.000-000",'placeholder'=>"00.000-000"]) !!}
</div>
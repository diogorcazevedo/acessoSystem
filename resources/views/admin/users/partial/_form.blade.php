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
    {!! Form::text('user[cpf]',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Identidade','Identidade:') !!}
    {!! Form::text('user[identity]',null,['class'=>'form-control','required' => 'required']) !!}
</div>





<!--client-->
<div class="form-group">
    {!! Form::label('Data de Nascimento','birthdate:') !!}
    {!! Form::text('birthdate',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<hr>

<label class="radio-inline">{{ Form::radio('gender', 'male') }}Masculino</label>
<label class="radio-inline">{{ Form::radio('gender', 'female') }}Feminino</label>

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
    {!! Form::number('children',null,['class'=>'form-control','required' => 'required']) !!}
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
    {!! Form::textarea('address',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Complemento','Complemento:') !!}
    {!! Form::textarea('complement',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Bairro','Bairro:') !!}
    {!! Form::textarea('neighborhood',null,['class'=>'form-control','required' => 'required']) !!}
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
    {!! Form::text('zipcode',null,['class'=>'form-control']) !!}
</div>
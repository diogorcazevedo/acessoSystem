<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','Senha:') !!}
    <br/>
    {!! Form::password('password',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password_confirmation','Confirmar senha:') !!}
    <br/>
    {!! Form::password('password',null,['class'=>'form-control']) !!}
</div>
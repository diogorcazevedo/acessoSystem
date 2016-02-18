<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email','Email:') !!}
    {!! Form::email('email',null,['class'=>'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','password:') !!}
    {!! Form::password('password',null,['class'=>'form-control','required' => 'required']) !!}
</div>

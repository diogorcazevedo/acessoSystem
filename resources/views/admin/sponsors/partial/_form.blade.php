<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Unidade da Federação','Unidade da Federação:') !!}
    {{ Form::select('state', arrayestados(), null, array('class' => 'form-control')) }}
</div>


<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<hr>
<label class="radio-inline">{{ Form::radio('status', '1') }}Contratado</label>
<label class="radio-inline">{{ Form::radio('status', '0') }}Prospecção</label>
<hr>

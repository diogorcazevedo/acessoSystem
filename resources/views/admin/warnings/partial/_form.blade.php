<div class="form-group">
    {!! Form::label('Administração','Administração:') !!}
    {!! Form::select('protocol_id',$protocols, null, ['class'=>'form-control' ,'placeholder' => 'Selecionar Administração'])!!}

</div>
<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    <hr>
    <label class="radio-inline">{{ Form::radio('status', '1') }}Publicar</label>
    <label class="radio-inline">{{ Form::radio('status', '0') }}Não Publicar</label>
    <hr>
</div>
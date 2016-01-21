<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <hr>
    <label class="radio-inline">{{ Form::radio('publishable', '1',true) }}Publicado</label>
    <label class="radio-inline">{{ Form::radio('publishable', '0') }}Retirar da Publicação</label>
</div>
<hr class="hrstyle">
<div class="form-group">
    {!! Form::label('Image','BUSCAR ARQUIVO:') !!}
    {!! Form::file('image',null,['class'=>'form-control']) !!}
</div>
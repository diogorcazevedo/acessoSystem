<div class="form-group">
    <hr>
    <label class="radio-inline">{{ Form::radio('type', '1') }}Logo</label>
    <label class="radio-inline">{{ Form::radio('type', '2') }}Proposta</label>
    <label class="radio-inline">{{ Form::radio('type', '3') }}Contrato</label>
    <label class="radio-inline">{{ Form::radio('type', '4') }}Faturas</label>
</div>
<hr class="hrstyle">
<div class="form-group">
    {!! Form::label('Image','BUSCAR ARQUIVO:') !!}
    {!! Form::file('image',null,['class'=>'form-control']) !!}
</div>
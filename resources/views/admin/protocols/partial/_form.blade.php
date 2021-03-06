<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ex: Secretaria de Administração CBMERJ']) !!}
</div>
<div class="form-group">
    {!! Form::label('Número do Edital','Número do Edital:') !!}
    {!! Form::text('protocol_number',null,['class'=>'form-control','placeholder'=>'não colocar ponto ou traço - ex: 012016']) !!}
</div>

<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    <hr>
    <label class="radio-inline">{{ Form::radio('status', '0') }}Construção</label>
    <label class="radio-inline">{{ Form::radio('status', '1') }}Inscrição</label>
    <label class="radio-inline">{{ Form::radio('status', '2') }}Publicações</label>
    <label class="radio-inline">{{ Form::radio('status', '3') }}Avisos</label>
    <label class="radio-inline">{{ Form::radio('status', '4') }}Arquivo (finalizado)</label>
</div>

<div class="form-group">
    <hr>
    <label class="radio-inline">{{ Form::radio('progress', '0') }}Início</label>
    <label class="radio-inline">{{ Form::radio('progress', '1') }}Executando</label>
    <label class="radio-inline">{{ Form::radio('progress', '2') }}Finalizado</label>
    <hr>
</div>
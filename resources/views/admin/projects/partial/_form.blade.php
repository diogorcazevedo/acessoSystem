<div class="form-group">
    {!! Form::label('Edital de Concurso','Edital de Concurso:') !!}
    {!! Form::select('protocol_id',$protocols, null, ['class'=>'form-control' ,'placeholder' => 'Selecionar Administração'])!!}

</div>
<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>



<div class="form-group">
    <hr>
    <p><b>Escolaridade</b></p>
    <label class="radio-inline">{{ Form::radio('schooling', 'Ensino Fundamental') }}Fundamental</label>
    <label class="radio-inline">{{ Form::radio('schooling', 'Ensino Médio') }}Médio</label>
    <label class="radio-inline">{{ Form::radio('schooling', 'Ensino Técnico') }}Técnico</label>
    <label class="radio-inline">{{ Form::radio('schooling', 'Ensino Superior') }}Superior</label>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('Price','Preço:') !!}
    {!! Form::text('tax',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Restrição idade','Restrição idade:') !!}
    {!! Form::text('age',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    <hr>
    <p><b>Cadastro Reserva</b></p>
    <label class="radio-inline">{{ Form::radio('register', '0') }}Não</label>
    <label class="radio-inline">{{ Form::radio('register', '1') }}Sim</label>
    <hr>
</div>
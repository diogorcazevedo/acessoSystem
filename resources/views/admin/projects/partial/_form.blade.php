<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ex: Guarda-Vidas']) !!}
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
    <hr>
    <p><b>Cadastro Reserva</b></p>
    <label class="radio-inline">{{ Form::radio('reserve', '0') }}Não</label>
    <label class="radio-inline">{{ Form::radio('reserve', '1') }}Sim</label>
    <hr>
</div>

<div class="form-group">
    <p><b>Vagas para Deficientes</b></p>
    <label class="radio-inline">{{ Form::radio('handicapped', '0') }}Não</label>
    <label class="radio-inline">{{ Form::radio('handicapped', '1') }}Sim</label>
    <hr>
</div>

<div class="form-group">
    <p><b>Reserva de Vagas (Cotas para Negros, Indios, Pardos e etc...) </b></p>
    <label class="radio-inline">{{ Form::radio('quota', '0') }}Não</label>
    <label class="radio-inline">{{ Form::radio('quota', '1') }}Sim</label>
    <hr>
</div>


<div class="form-group">
    <p><b>Necessidades Especiais</b></p>
    <label class="radio-inline">{{ Form::radio('needs', '0') }}Não</label>
    <label class="radio-inline">{{ Form::radio('needs', '1') }}Sim</label>
    <hr>
</div>

<div class="form-group">
    <p><b>Taxa de inscrição</b></p>
    <label class="radio-inline">{{ Form::radio('pay', '0') }}Sem Taxa</label>
    <label class="radio-inline">{{ Form::radio('pay', '1') }}Boleto</label>
    <label class="radio-inline">{{ Form::radio('pay', '2') }}GRU</label>
    <label class="radio-inline">{{ Form::radio('pay', '3') }}Cartão e Boleto</label>
    <label class="radio-inline">{{ Form::radio('pay', '4') }}Cartão e GRU</label>
    <hr>
</div>

<div class="form-group">
    <p><b>Isenção de taxa de inscrição</b></p>
    <label class="radio-inline">{{ Form::radio('free_tax', '0') }}Fechada</label>
    <label class="radio-inline">{{ Form::radio('free_tax', '1') }}Aberta</label>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
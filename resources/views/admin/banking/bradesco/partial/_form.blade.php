<div class="form-group">
    {!! Form::label('Valor','Valor:') !!}
    {!! Form::text('valor',null,['class'=>'form-control','placeholder'=>' ex: 1000.00 (usar ponto ao inves de vírgula)']) !!}
</div>

<hr style="clear: both;">
    <div class="form-inline col-lg-12">
            <div class="form-group col-lg-4">
                {!! Form::label('Agência','Agência:') !!}
                {!! Form::text('agencia',null,['class'=>'form-control','placeholder'=>'ex: 1172 (números)']) !!}
            </div>
            <div class="form-group col-lg-offset-1 col-lg-4">
                {!! Form::label('Dígito','Dígito:') !!}
                {!! Form::text('agenciaDv',null,['class'=>'form-control','placeholder'=>'ex: 1']) !!}
            </div>
            <div class="form-group col-lg-3 pull-right">
                <b>Carteira</b>
                <label class="radio-inline">{{ Form::radio('carteira', '3') }}3</label>
                <label class="radio-inline">{{ Form::radio('carteira', '6') }}6</label>
                <label class="radio-inline">{{ Form::radio('carteira', '9') }}9</label>
            </div>
    </div>
<br/><br/>
<hr style="clear: both;">

<div class="form-inline col-lg-12">
    <div class="form-group col-lg-4">
        {!! Form::label('Conta','Conta:') !!}
        {!! Form::text('conta',null,['class'=>'form-control','placeholder'=>'ex: 0001118 (números)']) !!}
    </div>
    <div class="form-group col-lg-offset-1 col-lg-4">
        {!! Form::label('Dígito','Dígito:') !!}
        {!! Form::text('contaDv',null,['class'=>'form-control','placeholder'=>'ex: 1']) !!}
    </div>
</div>
<br/><br/>
<hr style="clear: both;">


<div class="form-group">
    {!! Form::label('Descricao Demonstrativo','Descricao Demonstrativo:') !!}
    {!! Form::text('descricaoDemonstrativo',null,['class'=>'form-control','placeholder'=>'ex: Pagamento de taxa de inscrição concurso Guarda Vidas']) !!}
</div>

<div class="form-group">
    {!! Form::label('Instruções','Instruções:') !!}
    {!! Form::text('instrucoes',null,['class'=>'form-control','placeholder'=>'ex: Não receber após o vencimento']) !!}
</div>

{!! Form::hidden('bank', 1) !!}
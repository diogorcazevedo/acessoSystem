<div class="wellwhite col-lg-12">
    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Name','Nome:') !!}
        {!! Form::text('name',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Email','Email:') !!}
        {!! Form::email('email',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Telefone','Telefone:') !!}
        {!! Form::text('cel',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

</div>
<div class="wellwhite col-lg-12">
    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Concurso','Concurso:') !!}
        {{ Form::select('protocol', $concursos, null, array('class' => 'form-control','placeholder' => 'Selecionar Edital de Concurso')) }}
    </div>

    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Motivo','Motivo:') !!}
        {{ Form::select('about', arraycontatos(), null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Description','Descrição:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <hr style="clear: both;">

    <div class="form-group col-lg-offset-2 col-lg-8">
        {!! Form::label('Image','Subir Arquivo:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
</div>

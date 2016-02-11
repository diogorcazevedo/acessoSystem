<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label style="clear: both;">
        <span>Série :</span>
    </label>
    <select class="form-control" name="role">
        <option value="">ESCOLHER FUNÇÃO DO PROFISSIONAL CADASTRADO</option>
        <option value="client">Candidato</option>
        <option value="coach">Atendente</option>
        <option value="admin">Administrador</option>
    </select>

</div>
<div class="form-group">
    {!! Form::label('name', 'Nombre de Area') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('id_informe', 'Nombre informe') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
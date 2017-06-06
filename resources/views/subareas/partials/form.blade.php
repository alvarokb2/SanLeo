<div class="form-group">
    {!! Form::label('name', 'Nombre de Sub area') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('observacion', 'Observacion') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('id_area', 'Area') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Nombre del alumno') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('edad', 'Edad del alumno') !!}
    {!! Form::text('edad', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!}
    {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
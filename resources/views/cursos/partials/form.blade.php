<div class="form-group">
    {!! Form::label('name', 'Nombre del curso') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('id_user', 'Nombre educadora') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
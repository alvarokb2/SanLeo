<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        {!! Form::open(['route'=>'buscar_usuario']) !!}
        {!! Form::text('busqueda') !!}
        {!! Form::submit('Buscar', ['class' => 'btn btn-default'])!!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-4">
    </div>
</div>
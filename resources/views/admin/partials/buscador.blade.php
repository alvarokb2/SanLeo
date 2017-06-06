<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        {!! Form::open(['route'=>'users.search']) !!}
        {!! Form::text('busqueda') !!}
        {!! Form::submit('Buscar', ['class' => 'btn btn-default'])!!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-4">
    </div>
</div>
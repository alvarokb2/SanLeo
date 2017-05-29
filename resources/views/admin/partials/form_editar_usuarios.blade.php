
{!! Form::open(['route' => 'guardar_usuario'])!!}

{{ csrf_field() }}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>



<div class="form-group">

    <div class="col-md-9">
    </div>
    <div class="col-md-3">
        {!! Form::submit('Guardar') !!}
    </div>

</div>


{!! Form::close() !!}

{!! Form::model($user, ['route' => ['users.update', $user[0]->id]])!!}
{{method_field('PUT')}}
{{ csrf_field() }}
{{Form::hidden('id', $user[0]->id)}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $user[0]->name }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group">

    <label for="rol" class="col-md-4 control-label">Rol</label>

    <select class="btn btn-default dropdown-toogle" name="rol">
        <option value="admin">admin</option>
        <option value="educadora">educadora</option>
        <option value="apoderado">apoderado</option>
    </select>
</div>

<div class="form-group">

    <div class="col-md-9">
    </div>
    <div class="col-md-3">
        {!! Form::submit('Guardar') !!}
    </div>

</div>


{!! Form::close() !!}

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>

                    <th>
                        Nombre
                    </th>
                    <th>
                        Acciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>
                            {{$usuario->name}}
                        </td>
                        <td>
                            <a href="{{route('users.edit', $usuario->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $usuario->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td>
                            <a href="{{route('cursos.index')}}">Ver Cursos</a>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
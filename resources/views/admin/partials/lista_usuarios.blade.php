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
                            <a href="{{route('editar_usuario', $usuario->id)}}">Editar</a>
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
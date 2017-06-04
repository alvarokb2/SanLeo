@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

        <h2>
            Alumnos
            <a href="{{ route('alumnos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
            @include('alumnos.partials.info')
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre alumno</th>
                <th>Edad</th>
                <th>Fecha de nacimiento</th>
                <th>Curso</th>
                <th>Apoderado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>
                        <strong>{{ $alumno->name }}</strong>
                    </td>
                    <td>{{ $alumno->edad}}</td>
                    <td>{{ $alumno->fecha_nacimiento}}</td>
                    <td>{{ $alumno->id_curso}}</td>
                    <td>{{ $alumno->id_user}}</td>

                    <td>Ver alumnos
                        <!--  <a href=" route('alumnos.index', $alumno->id) " class="btn btn-default">Ver alumnos</a> -->
                    </td>
                    <td>
                        <a href="{{ route('alumnos.edit', $alumno->id) }} " class="btn btn-default">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method ="POST">
                        {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-default">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
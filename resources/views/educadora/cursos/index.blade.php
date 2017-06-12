@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

        <h2>
            Lista de cursos
            <a href="{{ route('cursos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
            @include('educadora.cursos.partials.info')
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de curso</th>
                <th>Educadora</th>

            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>
                        <strong>{{ $curso->name }}</strong>
                    </td>
                    <td>{{ $curso->users()->first()->name}}</td>

                    <td>
                        <a href=" {{route('alumnos.index')}}" class="btn btn-default">Ver alumnos</a>
                    </td>
                    <td>
                        <a href="{{ route('cursos.edit', $curso->id) }} " class="btn btn-default">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('cursos.destroy', $curso->id) }}" method ="POST">
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
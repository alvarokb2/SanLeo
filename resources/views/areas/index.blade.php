@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <h2>
                Areas
                <a href="{{ route('areas.create') }}" class="btn btn-primary pull-right">Nuevo</a>

            </h2>

            <table class="table">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
                </thead>
                <tbody>
                @foreach($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>
                            <strong>{{ $area->name }}</strong>
                        </td>
                        <td>
                            <a href=" {{route('subareas.index')}}" class="btn btn-default">Ver Sub Areas</a>
                        </td>
                        <td>
                            <a href="{{ route('areas.edit', $area->id) }} " class="btn btn-default">Editar nombre de area</a>
                        </td>
                        <td>
                            <form action="{{ route('areas.destroy', $area->id) }}" method ="POST">
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
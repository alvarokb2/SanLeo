@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <h2>
                Sub Areas
                <a href="{{ route('subareas.create') }}" class="btn btn-primary pull-right">Nueva</a>

            </h2>

            <table class="table">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
                </thead>
                <tbody>
                @foreach($subareas as $subarea)
                    <tr>
                        <td>{{ $subarea->id }}</td>
                        <td>
                            <strong>{{ $subarea->name }}</strong>
                        </td>
                        <td>
                            <a href=" {{route('items.index')}}" class="btn btn-default">Ver Items</a>
                        </td>
                        <td>
                            <a href="{{ route('subareas.edit', $subarea->id) }} " class="btn btn-default">Editar nombre de sub area</a>
                        </td>
                        <td>
                            <form action="{{ route('subareas.destroy', $subarea->id) }}" method ="POST">
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
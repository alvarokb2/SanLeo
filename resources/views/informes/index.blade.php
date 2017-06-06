@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <h2>
                Cor Advantage
                <a href="{{ route('areas.index') }}" class="btn btn-primary pull-right">Modificar informe</a>
            </h2>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Periodo</th>

                </tr>
                </thead>
                <tbody>
                @foreach($informes as $informe)
                    <tr>
                        <td>{{ $informe->id }}</td>
                        <td>
                            <strong>{{ $informe->periodo }}</strong>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

@endsection
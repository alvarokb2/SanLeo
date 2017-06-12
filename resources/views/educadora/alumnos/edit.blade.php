@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Alumno
            <a href="{{ route('alumnos.index') }}" class="btn btn-default pull-right">Ir a lista de alumnos
            </a>
        </h2>
        @include('educadora.alumnos.partials.error')
        {!! Form::model($alumnos, ['route' => ['alumnos.update', $alumnos->id], 'method' => 'PUT']) !!}

        @include('educadora.alumnos.partials.form')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">

    </div>
@endsection
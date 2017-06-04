@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Nuevo Alumno
            <a href="{{ route('alumnos.index') }}" class="btn btn-default pull-right">Ir a lista de alumnos
            </a>
        </h2>

        @include('alumnos.partials.error')
        {!! Form::open(['route' => 'alumnos.store']) !!}

        @include('alumnos.partials.form')

        {!! Form::close() !!}
    </div>

    <div class="col-xs-12 col-sm-4">

    </div>
@endsection
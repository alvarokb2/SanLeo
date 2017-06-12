@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Nuevo Curso
            <a href="{{ route('cursos.index') }}" class="btn btn-default pull-right">Volver
            </a>
        </h2>

        @include('educadora.cursos.partials.error')
        {!! Form::open(['route' => 'cursos.store']) !!}

        @include('educadora.cursos.partials.form')

        {!! Form::close() !!}
    </div>

    <div class="col-xs-12 col-sm-4">

    </div>
@endsection
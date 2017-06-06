@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Curso
            <a href="{{ route('cursos.index') }}" class="btn btn-default pull-right">Ir a lista de cursos
            </a>
        </h2>
        @include('cursos.partials.error')
        {!! Form::model($cursos, ['route' => ['cursos.update', $cursos->id], 'method' => 'PUT']) !!}

        @include('cursos.partials.form')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
    </div>
@endsection
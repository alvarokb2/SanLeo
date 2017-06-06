@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Area
            <a href="{{ route('areas.index') }}" class="btn btn-default pull-right">Volver
            </a>
        </h2>
        @include('areas.partials.error')
        {!! Form::model($areas, ['route' => ['areas.update', $areas->id], 'method' => 'PUT']) !!}

        @include('areas.partials.form')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
        nada
    </div>
@endsection
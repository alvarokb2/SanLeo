@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Nueva Sub Area
            <a href="{{ route('subareas.index') }}" class="btn btn-default pull-right">Volver
            </a>
        </h2>

        @include('areas.partials.error')
        {!! Form::open(['route' => 'subareas.store']) !!}

        @include('subareas.partials.form')

        {!! Form::close() !!}
    </div>

    <div class="col-xs-12 col-sm-4">

    </div>
@endsection
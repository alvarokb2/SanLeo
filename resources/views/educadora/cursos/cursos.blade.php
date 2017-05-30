@extends('educadora.index')

@section('contenido')
    @include('educadora.partials.lista_cursos')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('cursos.create')}}">Nuevo</a>
    </div>
@endsection
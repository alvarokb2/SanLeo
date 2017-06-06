@extends('admin.index')

@section('contenido')
    @include('admin.partials.buscador')
    @include('admin.partials.lista_usuarios')

    <div class="container-fluid">
            <a class="btn btn-primary" href="{{route('users.create')}}">Nuevo</a>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    @include('admin.partials.menu')
    <br>
    @yield('contenido')
@endsection
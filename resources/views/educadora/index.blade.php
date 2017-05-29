<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 29-05-17
 * Time: 15:17
 */
@extends('layouts.app')

@section('content')
    @include('admin.partials.menu')
    <br>
    @yield('contenido')
@endsection
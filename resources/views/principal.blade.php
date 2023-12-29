@extends('layouts.app')
@section('titulo')
    Bienvenido a la Prueba técnica UNBC
@endsection
@section('indicacion')
    Se solicita realizar un ABM (Alta, Baja y Modiﬁcacion) de registros de Usuarios.
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center mb-10" >
        <img src="{{asset('img/logo-unbc.png')}}" alt="Imagen UNBC">
    </div>
@endsection

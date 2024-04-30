@extends('layouts.app-master')
@section('content')

<h1>Pensylvania Swim Academy</h1>
    
    @if(Auth::check())
        <p>Bienvenido, {{ Auth::user()->username }}</p>
        @if(isset($user->tipo))
            <p>Tipo: {{ $user->tipo }}</p>
        @endif
    @else
        <p>Para ver más contenido <a href="{{ url('/login') }}">inicia sesión</a></p>
    @endif


@endsection
    


@extends('layouts.master')

@section('navBar')
    

@if(Auth::guest())
    <div>Navbar Invitado</div>
@elseif(Auth::user()->hasRole('player'))
    <div>Navbar Jugador</div>
@elseif(Auth::user()->hasRole('admin'))
    <div>Navbar como administrador</div>


@endif

@endsection
@extends('layouts.master')


@section('content')
<br>
<div class="offset-1">
    <!-- Foto de perfil -->
    <img src=''>
    <h2>{{ $player->firstName . $player->lastName}} </h2>
    <h4>Rating: {{ $player->rating }}</h4>
    <h4>Barrio: {{ $player->zone }}</h4>
    <h4>Telefono: {{ $player->contact}}</h4>
    <h4>Email: {{ $player->email}}</h4>
    <h4>Pie Fuerte: {{ $player->foot}}</h4>
    <h4>Altura: {{ $player->height}}</h4>
    <h4>Posicion: {{ $player->position}}</h4>
    <a class='btn' href='#'>Hacer reserva:</a>
    <br>
    <!-- ADMIN / PLAYER USER -->
    <a class="btn" href="#">Editar</a>
    <br>
    <!-- ADMIN -->
    <a class="btn" href="#">Eliminar</a>
    <br>

    <a href="#">Volver</a>
</div>
@endsection

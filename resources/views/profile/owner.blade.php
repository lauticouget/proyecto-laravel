@extends('includes.head')
@extends('includes.nav')


@section('content')
<br>
<div class="offset-1">
    <h2>{{ $field->fieldName }}</h2>
    <h4>Direccion {{ $field->address }}</h4>
    <h4>Rating: {{ $field->rating }}</h4>
    <h4>Barrio: {{ $field->zone }}</h4>
    <h4>Telefono: {{ $field->contact}}</h4>
    <h4>Email: {{ $field->email}}</h4>
    <a class='btn' href='#'>Hacer reserva:</a>
    <br>
    <!-- ADMIN / FIELD USER -->
    <a class="btn" href="#">Editar</a>
    <br>
    <!-- ADMIN -->
    <a class="btn" href="#">Eliminar</a>
    <br>

    <a href="#">Volver</a>
</div>
@endsection

@extends('includes.footer')
<!-- LISTADO DE JUGADORES PARA ADMINISTRAR
    EDITAR Y ELIMINAR -->

@extends('includes.head')
@extends('includes.nav')

@section('name')
<h2>LISTADO DE JUGADORES</h2>
<ul>
@foreach ($players as $player)
    <li><a href='#'>{{$player->firstName}} . {{$player->lastName}}</a>
<!-- EL BOTON TIENE QUE ABRIR UN POPUP PARA CONFIRMAR LA ELIMINACION Y CONECTARSE AL CONTROLADOR PARA DESACTIVARLO DE LA BASE -->
        <a class='button'>Eliminar usuario</a>
<!-- EL BOTON TIENE QUE DIRIGIRSE A LA VISTA DE EDICION DE ESE USUARIO -->
        <a class='button'>Editar usuario</a> 
    </li>
@endforeach
</ul>

{{ $players = DB::table('players')->simplePaginate(15) }}

@endsection

@extends('includes.footer')

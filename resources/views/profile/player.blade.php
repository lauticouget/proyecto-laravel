@extends('includes.nav')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- profile image -->
                <h3>Hola,</h3>
                <!-- information -->
                <img class="centered" src="">
                <p>Nombre: </p>
                <br>
                <p>Rating:</p> 
                <br>
                <p>Informacion de contacto:</p>
                <br>
                <a class="button">Editar</a>
                <!-- ADMIN -->
                <p>Eliminar</p>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('includes.footer')
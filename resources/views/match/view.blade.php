@extends('includes.nav')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- form -->
                <ul>
                    <img class="centered" src="">
                    <li>*Cancha:</li>
                    <br>
                    <li>*Fecha y Horario:</li>
                    <!-- CALENDAR -->
                    <br>
                    <li>Nombre del Partido</li>
                    <br>
                    <li>Lista 1:</li>
                    <a class="button">Sumarse!</a>
                    <br>
                    <li>Lista 2:</li>
                    <a class="button">Sumarse!</a>
                    <br>
                    <!-- ADMIN & CREADOR -->
                    <a class="button">Crear</a>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('includes.footer')
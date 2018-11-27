@extends('includes.nav')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form class="form-group" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <img class="centered" src="">
                    <div class="form-group">
                        <label for="field">Seleccionar Cancha:</label>
                        <select class="form-control" id="fieldSelect" name="provincia">
                            <option>Seleccionar...</option>
                            <!-- JS PARA DESPLEGAR TODAS LAS CANCHAS DISPONIBLES -->
                            <!-- VISTA DE EDICION, PREVIO SELECCIONADO -->
                        </select>
                    </div>
                    <label for="field">Seleccionar Horario:</label>
                    <!-- CALENDAR -->
                    <!-- VISTA DE EDICION, PREVIO SELECCIONADO -->
                    <br>
                    <a class="button">Crear</a>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('includes.footer')
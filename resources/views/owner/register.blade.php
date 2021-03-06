@extends('includes.nav')


@section('content')
@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- form -->
                <form class="form-group" action="" method="post" enctype="multipart/form-data">
                    <img class="centered" src="">
                    <div class="form-group">
                        <label for="fieldName">Nombre de la cancha:</label>
                        <input type="text" name="fieldName" value="{{ old("fieldName") }}" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="address">Direccion:</label>
                        <input type="text" name="address" value="{{ old("address") }}" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="contactData">Informacion de contacto:</label>
                        <input type="text" name="contactData" value="{{ old("contactData") }}" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ old("email") }}" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="zone">Barrio</label>
                        <input type="text" name="zone" value="{{ old("zone") }}" class="form-control">
                    </div>
                    <br>
                    <p>*Subir fotos (minimo una):</p>
                    <!-- EL BOTON TIENE QUE LINKEAR AL CONTROLADOR PARA QUE LO AGREGUE A LA BASE -->
                    <a class="button" href="#">Registrarse</a>
                    <br>
                    <!-- SI EL REGISTRO FUE EXITOSO, DEBE MOSTRAR UN POPUP DE EXITO Y DIRIGIR A LA HOME -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('includes.footer')
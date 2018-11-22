<!-- LISTADO DE CANCHAS PARA ADMINISTRAR
    EDITAR Y ELIMINAR -->

    @extends('includes.head')
    @extends('includes.nav')
    
    @section('fieldsList')
    <h2>LISTADO DE CANCHAS</h2>
    <ul>
    @foreach ($fields as $flied)
        <li><a href='#'>{{$field->firstName}} . {{$field->lastName}}</a>
            <!-- EL BOTON TIENE QUE ABRIR UN POPUP PARA CONFIRMAR LA ELIMINACION Y CONECTARSE AL CONTROLADOR PARA DESACTIVARLO DE LA BASE -->
            <a class='button' href='#'>Eliminar usuario</a>
            <!-- EL BOTON TIENE QUE DIRIGIRSE A LA VISTA DE EDICION DE ESA CANCHA -->
            <a class='button' href='#'>Editar usuario</a> 
        </li>
    @endforeach
    
    </ul>
    {{ $fields = DB::table('fields')->simplePaginate(15) }}

        
    @endsection
    
    @extends('includes.footer')
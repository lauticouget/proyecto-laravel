
<div class="container-fluid">
        <div class="row">
                <div class="col-md-12 logo">
                <img src="http://tusimagenesde.com/wp-content/uploads/2016/04/pelota-de-futbol-2.png" href="{{ route('home') }}">
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item button">
                        <a class="nav-link active" href="{{ route('home') }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">CANCHAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CREAR RESERVA</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">BUSCAR PARTIDOS</a>
                        </li>
                    <!-- LOGED -->
                    <li class="nav-item">
                    <a class="nav-link" href="#">Bienvenido, {{ /*NAME*/ }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MI CUENTA</a>
                    </li>
                    <!-- NOT LOGED -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">INICIAR SESION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REGISTRARSE</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
@if(Auth::guest())
    <div>
        <UL>
            <li class="nav-item">
                <a class="nav-link" href="#">INICIAR SESION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">REGISTRARSE</a>
            </li>
        </UL>
    </div>
@elseif(Auth::user()->hasRole('owner'))
    <div>Navbar como owner </div>
@elseif(Auth::user()->hasRole('player'))
    <div>Navbar Jugador</div>
@endif
<div class="navbar navbar-expand-md greencol mb-4" role="navigation">
    <a class="navbar-brand" href="{{ url('/') }}">Easy Foot</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            {{-- GUEST DROPDOWN --}}
                @guest
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Start Now!</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1">
                            <li class="dropdown-item" ><a href="/user/register" class="dropdown-item" aria-expanded="false">Register</a></li>
                            <li class="dropdown-item "><a href="/user/login" class="dropdown-item" aria-expanded="false">Login</a></li>
                        </ul>
                </li>
                @endguest


            
            @auth
            {{-- Owner DropDown --}}
                @if (Auth::User()->role('owner'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item" href="#"><a href ="{{ url('/logout') }}">Log Out</a></li>
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item" href="#"><a>Action 1.1</a></li>
                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                        <li class="dropdown-item" href="#"><a>Action 1.1.1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif

            {{-- Player DropDown --}}
            
                @if (Auth::User()->role('player'))
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <li class="dropdown-item" href="#"><a>Action 2 A</a></li>
                            <li class="dropdown-item" href="#"><a>Action 2 B</a></li>
                            <li class="dropdown-item" href="#"><a>Action 2 C</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                    <li class="dropdown-item" href="#"><a>Action 2.1 A</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1 B</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1 C</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 A</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 B</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 A</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 B</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 C</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif
            @endauth
                
            
            
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</div>

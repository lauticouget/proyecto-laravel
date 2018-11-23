@extends('includes.nav')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- form -->
                <ul>
                    <img class="centered" src="">
                    <li>*Cancha: {{ $match->field}}</li>
                    <br>
                    <li>*Fecha y Horario: {{ $match->horary }}</li>
                    <!-- CALENDAR -->
                    <br>
                    <li>Lista 1:</li>
                    <ol>
                        @foreach ($team1 as $player)
                            <li>
                            <p>{{$player->firstName . " " . $player->lastName}}</p>
                            </li>
                        @endforeach
                    </ol>
                    <br>
                    <li>Lista 2:</li>
                    <ol>
                        @foreach ($team2 as $player)
                            <li>
                            <p>{{$player->firstName . " " . $player->lastName}}</p>
                            </li>
                        @endforeach
                        </ol>
                    <a class="button">Sumarse!</a>
                    <br>
                    <!-- ADMIN & CREADOR -->
                    <a class='btn'>Editar</a>
                    <a class='btn'>Cancelar Partido</a>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('includes.footer')
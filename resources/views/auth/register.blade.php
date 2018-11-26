@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row">
                    <a class="btn btn-primary col-6" href="/register/field">REGISTRARSE COMO CANCHA</a>
                        <br>
                    <a class="btn btn-success col-6" href="/register/player">REGISTRARSE COMO JUGADOR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

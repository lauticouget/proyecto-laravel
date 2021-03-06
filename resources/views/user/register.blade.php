@extends('layouts.master')

@section('content')

<div class="container">
    <div class=>
        
        @if (isset($noGuest))
            <div class="row main">
                <span class="alert alert-warning">{{ $noGuest }}</span>
            </div>
        @endif
        
        <div class="row main"> 
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="{{ route('user.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name" class="cols-sm-2 control-label">First Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="first_name" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password_confirmation" id="confirm"  placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
                    <div class="login-register">
                        <a href="{{ route('user.login') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</div>
@if ($errors->any())
    <div class="container col-3 alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
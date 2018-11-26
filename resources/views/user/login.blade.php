@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="form-heading">Login Form</h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <p>Please enter your email and password</p>
            </div>
            <form method="post" action="/login" id="Login">
                <div class="form-group col-4">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
                </div>
                <div class="form-group col-4">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="forgot">
                    <a href="#">Forgot password?</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


@isset($successfullyLogin)
    <div class="container">
        <div class="jumbotron">
            <span class="alert alert-success">{{ $successfullyLogin }}</span>
        </div>
    </div>
@endisset

<div class="alert-"></div>
@endsection

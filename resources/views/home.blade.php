@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <h1>HOME</h1>
    <div class="container">
        @if (isset($role))
            <span class="alert alert-success">{{ $role }}</span>
        @endif
    </div>
</div>



@endsection
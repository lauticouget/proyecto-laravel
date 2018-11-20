@extends('layouts.master')

@section('content')

<div class ="container border">
    {{ $users->max('attitude') }}
</div>

@endsection
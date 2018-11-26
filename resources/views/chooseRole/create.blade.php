@extends('layouts.master')  

@section('content')
<div class="container shadow-lg p-3 mb-5 bg-white rounded">
    <form action="{{ route('chooseRole.store') }}" method="post">
    @csrf
    <div class="span ">
            <h3 class="h3"> 
                Wich are you?
            </h3>
        </div>
        
        <div class="pretty p-switch">
            <input type="radio" name="role" value="owner"/>
            <div class="state p-success">
                <label>Owner</label>
            </div>
        </div>
        
        <div class="pretty p-switch p-fill">
            <input type="radio" name="role" value="player"/>
            <div class="state p-success">
                <label>Player</label>
            </div>
        </div>
        <div class="pretty p-switch p-fill">
            <button type="submit" class="btn btn-success btn-lg btn-block login-button">Continue </button>
        </div>
    </form>
        
</div>
@endsection
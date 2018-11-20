@extends('layouts.master')

@section('content')

<div class ="container border">
    @foreach ($users as $user)
    <div class="row">
          <div class="span9">
              {{ $user->first_name }}
              <div class="row">
                Attitude:
                      {{ $user->avgAtt() }}
                Skill:
                      {{ $user->avgSkill() }}
              </div>
              <div class="row">
                  
              </div>
          </div>
      </div>    
      @endforeach
</div>

@endsection

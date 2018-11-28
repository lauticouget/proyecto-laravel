@extends('layouts.master')  

@section('content')

<div class="container">
    <div class="jumbotron">
        <h1 class="h1">Matches</h1>
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Team 1</th>
                <th scope="col">Team 2</th>
                <th scope="col">Score</th>
                <th scope="col">Field</th>
              </tr>
            </thead>
            @foreach ($matches as $match)
            <tbody>
                <tr>
                    <th scope="row">{{ $match->id }}</th>
                    <td>{{ $match->team1()->name }}</td>
                    <td>{{ $match->team2()->name }}</td>
                    <td> 2-0</td>
                    <td>{{ $match->field()->name }}</td>
                </tr>
            </tbody>
            @endforeach
          </table>
          {!! $matches->links() !!}
    </div>
</div>

@endsection
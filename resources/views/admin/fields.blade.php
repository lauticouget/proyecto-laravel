@extends('layouts.master')

@section('content')
<h2>LISTADO DE CANCHAS</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> location </th>
            <th scope="col"> adress </th>
            <th scope="col"> owner </th>
            <th scope="col"> photopath </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fields as $field)
        <tr>
            <th scope="row">{{ $field->id }}</th>
            <td>{{ $field->adress }}</td>
            <td>{{ asset($field->photopath) }}</td>
        </tr>
        @endforeach
        {{ $fields->links() }}
    </tbody>
</table>
@endsection
@extends('layouts.admin')

@section('content')
  <h1>Elenco progetti della tecnologia {{ $technology->name }}</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome progetto</th>
      </tr>
    </thead>
    <tbody>
      @foreach($technology->projects as $project)
        <tr>
          <td>{{ $project->id }}</td>
          <td>{{ $project->name }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Joke</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach($jokes as $joke)
        <tr>
        <td>{{ $joke->id }}</td>
        <td>{{ $joke->joke }}</td>
    </tr>
        @endforeach
  
    </tbody>
  </table>
@endsection

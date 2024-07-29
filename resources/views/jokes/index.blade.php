<!-- resources/views/jokes/index.blade.php -->

@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@auth
    <!-- Content for authenticated users -->
    <form method="POST" action="{{ route('jokes.store') }}" class="form-inline">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="joke" class="form-control" id="inputContent" style="display:inline-block;width:50%;" placeholder="Type your joke here...">
            <button type="submit" class="btn btn-primary mb-2">Add Joke</button>
        </div>
    </form>
@endauth

@guest
    <!-- Content for guest users -->
    <div class="alert alert-primary" role="alert" style="margin-left:1rem;margin-right:1rem">
        You need to <a href="{{ route('login') }}" class="alert-link">log in</a> to be able to add, edit, or delete jokes.
      </div>
@endguest

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Joke</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jokes as $joke)
            <tr>
                <td>{{ $joke->id }}</td>
         
                    <!-- Form for updating jokes -->
                <form method="POST" action="{{ route('jokes.update', $joke->id) }}" style="display:inline-block;">
                        @csrf
                        @method('PUT')
                       
                     
                        <td>   <input style="width:100%;" type="text" name="joke" class="form-control" value="{{ $joke->joke }}" style="display:inline-block;width:50%;"> </td> 
                        @auth
                        <td>   <button type="submit" class="btn btn-warning">Update</button></td>
                        @endauth
                        @guest
                        <td style="cursor: not-allowed !important;">
                            <button type="button" class="btn btn-warning btn-inactive" style="cursor: not-allowed !important;" disabled>Update</button>

                        </td>
                        @endguest
                    </form>
               @auth
                <td>
                    <!-- Form for deleting jokes -->
                    <form method="POST" action="{{ route('jokes.destroy', $joke->id) }}" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            @endauth
            @guest
            <td style="cursor: not-allowed !important;">
            <button type="submit" class="btn btn-danger" disabled>Delete</button>
            </td>
            @endguest
            </tr>
        @endforeach
    </tbody>
</table>
<div style="display:flex;width:100%;height:3rem;justify-content:center;align-items:center">
{{$jokes->links()}}
</div>
@endsection

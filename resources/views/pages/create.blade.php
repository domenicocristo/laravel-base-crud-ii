@extends('layouts.main-layout')
@section('content')
    
    <h1>Create Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $comic -> id) }}" method="POST">

        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title"><br>

        <label for="subtitle">Author:</label>
        <input type="text" name="subtitle" placeholder="author"><br>

        <label for="release_date">Release date:</label>
        <input type="date" name="releaseDate"><br>
        
        <input type="submit" value="UPDATE">
    </form>
@endsection
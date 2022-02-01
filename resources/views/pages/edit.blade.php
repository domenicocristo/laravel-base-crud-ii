@extends('layouts.main-layout')
@section('content')
    
    <h1>Edit Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $comic->id) }}" method="POST">
        @method('POST')
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{ $comic->title }}"><br>

        <label for="author">Author:</label>
        <input type="text" name="author" placeholder="author" value="{{ $comic->author }}"><br>

        <label for="releaseDate">Release date:</label>
        <input type="date" name="releaseDate" value="{{ $comic->releaseDate }}"><br>
        
        <input type="submit" value="CREATE"><br>

        <a href="{{url('/')}}">BACK TO HOME</a>
    </form>
@endsection
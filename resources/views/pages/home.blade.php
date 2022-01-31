@extends('layouts.main-layout')
@section('content')
    <section id="comics-home">
        <h1>HOME</h1>

        <h3>
            <a href="{{ route('create') }}">CREATE NEW</a>
        </h3>
        
        <h1>LIST COMICS:</h1>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic', $comic -> id) }}">
                        <h2>Title - {{ $comic -> title }}</h2>
                        <h5>Release date - {{ $comic -> releaseDate }}</h5>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
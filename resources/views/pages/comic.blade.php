@extends('layouts.main-layout')
@section('content')
    <section id="comics-details">
        <h1>DETAILS COMIC</h1>
        <h2>Title - {{ $comic -> title }}</h2>
        <h4>Author - {{ $comic -> author }}</h4>
        <h5>Release date - {{ $comic -> releaseDate }}</h5>
        <a href="{{url('/')}}">--> BACK TO HOME <--</a>
    </section>
@endsection
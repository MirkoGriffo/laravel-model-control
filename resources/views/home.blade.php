
@extends('layouts.main')

@section('content')
    <div class="container cards">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>Titolo: {{$movie->title}}</h2>
                <h3>Titolo originale: {{$movie->original_title}}</h3>
                <h4>Nazione: {{$movie->nationality}}</h4>
                <p>Data: {{$movie->date}}</p>
                <h3>Voto: {{$movie->vote}}</h3>
            </div>
        @endforeach
    </div>
@endsection

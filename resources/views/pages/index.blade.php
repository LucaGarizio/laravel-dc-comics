@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <h1 class="mt-4">Fumetti: {{count($comics)}}</h1>
        <a href="{{route('comics.create')}}" class="btn btn-success my-3">Inserisci nuovo fumetto</a>
    
        @foreach ($comics as $comic)
        <div class="col-4">
            <h4>Titolo:</h4>
            <a href="{{route('comics.show', $comic -> id)}}">
            <p class="mb-1">{{$comic->title}} </p>
            </a>
            <a href="{{route('comics.edit', $comic -> id)}}"><button class="btn btn-secondary mb-3 mt-0">Aggiorna</button></a> 
            <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', $comic -> id)}}">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger mb-3 mt-0">Rimuovi</button>
            </form>
        </div>
        @endforeach
    </div>
</div>    
@endsection

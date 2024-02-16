@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <h1 class="mt-4">Fumetti: {{count($comics)}}</h1>
        <div class="btn-container">
        <a href="{{route('comics.create')}}" class="btn btn-primary my-3">Inserisci nuovo fumetto</a>
        </div>
    
        @foreach ($comics as $comic)
        <div class="col-4 ">
            <div class="card bg-success m-1 p-2">
                <h4 class="pt-4">Titolo:</h4>
                <a href="{{route('comics.show', $comic -> id)}}">
                    <p class="mb-1 text-white">{{$comic->title}} </p>
                </a>
                <div class="card-body">
                    <a href="{{route('comics.edit', $comic -> id)}}"><button class="btn btn-secondary mb-3 mt-0">Aggiorna</button></a> 
                    <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', $comic -> id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-3 mt-0">Rimuovi</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> 
@endsection
